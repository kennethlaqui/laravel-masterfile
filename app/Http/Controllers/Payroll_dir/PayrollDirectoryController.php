<?php

namespace App\Http\Controllers\Payroll_dir;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PayrollDirectoryController extends Controller
{
    public function index()
    {

        $payr_dir = DB::table('q_payr_dir')
        ->select('q_payr_dir.cntrl_no', 'q_payr_dir.appl_prd', 'q_payr_dir.year____',
                 'q_payr_dir.month___', 'q_payr_dir.part____', 'q_payr_dir.seqn_num',
                 'q_payr_dir.strt_dte', 'q_payr_dir.last_dte')
        ->get();

        if (request()->ajax()) {
            return datatables($payr_dir)->toJson();
        }
        return view('government.payroll_dir');

    }

    public function getAjax($appl_prd)
    {

        // -- used in dynamic table retrieval
        $result = DB::table('q_payr_dir')
        ->select('q_payr_dir.cntrl_no', 'q_payr_dir.appl_prd', 'q_payr_dir.year____',
                'q_payr_dir.month___', 'q_payr_dir.part____', 'q_payr_dir.seqn_num',
                'q_payr_dir.strt_dte', 'q_payr_dir.last_dte')
        ->where('appl_prd', $appl_prd)
        ->orderBy('cntrl_no', 'ASC')
        ->get();

        // return response()->json(['data' => $result]);
        // -- YOU must return ajax
        if (request()->ajax()) {
            // return datatables()->of($result)->toJson();
            return datatables($result)->toJson();
        }

        return view('government.payroll_dir');

    }

    public function search_contributaion(Request $request)
    {
        // -- return is array
        $payr_dir = $request->get('payr_dir');

        // -- data for printing/download
        // -- instead of foreach, We used whereIn clause to loop the array variable
        $sss_contri = DB::table('s_empl_mst', 'l_emplgovn', 'l_emplgenr', 'l_emplpers', 'q_sss_hist')
        ->selectRaw('s_empl_mst.last_nme,      s_empl_mst.frst_nme,      s_empl_mst.midl_nme,      s_empl_mst.midl_ini,
                     s_empl_mst.chge_last_nme, s_empl_mst.chge_frst_nme, s_empl_mst.chge_midl_ini, s_empl_mst.chge_extn_nme,
                     s_empl_mst.chge_sss_flag, l_emplgenr.dte_hire,      l_emplgenr.dte_rsgn,      l_emplgovn.sss_numb,
                     l_emplpers.suffix__,
                     sum(sss_empl) as sss_empl,
                     sum(sss_offc) as sss_offc,
                     sum(ecc_offc) as ecc_offc')
        ->whereIn('q_sss_hist.payr_dir', $payr_dir)
        ->join('l_emplgovn', 'l_emplgovn.empl_cde', '=', 's_empl_mst.empl_cde')
        ->join('l_emplgenr', 'l_emplgenr.empl_cde', '=', 'l_emplgovn.empl_cde')
        ->join('l_emplpers', 'l_emplpers.empl_cde', '=', 'l_emplgenr.empl_cde')
        ->join('q_sss_hist', 'q_sss_hist.empl_cde', '=', 'l_emplgovn.empl_cde')
        ->groupBy('s_empl_mst.last_nme',      's_empl_mst.frst_nme',      's_empl_mst.midl_nme',      's_empl_mst.midl_ini',
                  's_empl_mst.chge_last_nme', 's_empl_mst.chge_frst_nme', 's_empl_mst.chge_midl_ini', 's_empl_mst.chge_extn_nme',
                  's_empl_mst.chge_sss_flag', 'l_emplgenr.dte_hire',      'l_emplgenr.dte_rsgn',      'l_emplgovn.sss_numb',
                  'l_emplpers.suffix__')
        ->orderBy('s_empl_mst.last_nme')
        ->get()
        ->toArray();
        // foreach($sss_contri as $sss_contri){

        //     if($sss_contri->chge_sss_flag = 'T'){
        //         $empl_cde = $sss_contri->empl_cde;
        //         $chge_last_nme = $sss_contri->chge_last_nme;
        //         $chge_frst_nme = $sss_contri->chge_frst_nme;
        //         $chge_midl_ini = $sss_contri->chge_midl_ini;
        //         $chge_extn_nme = $sss_contri->chge_extn_nme;
        //     }


        // }
        // dd($sss_contri);



//         empl_cde character(10) NOT NULL,
//         payr_dir integer NOT NULL,
//         sss_empl numeric(8,2) NOT NULL,
//         med_empl numeric(8,2) NOT NULL,
//   sss_offc numeric(8,2) NOT NULL,
//   med_offc numeric(8,2) NOT NULL,
//   ecc_offc numeric(8,2) NOT NULL,
//   encoded_ character(1) NOT NULL,
//   base_sss numeric(10,2) NOT NULL,
//   base_med numeric(10,2) NOT NULL,

        // $merged = merge([$sss_hist, $sss_contri]);

        // dd($merged);
        // -- endpoint
    return view('government.reports.sss_print_download', compact('sss_contri'));

        //return view('government.reports.sss_report', compact('sss_hist'));


    }



}
