<?php

namespace App\Http\Controllers\Payroll_dir;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PayrollDirectoryController extends Controller
{
    public function index()
    {

        $payr_dir = DB::table('payroll.q_payr_dir')
        ->select('payroll.q_payr_dir.cntrl_no', 'payroll.q_payr_dir.appl_prd', 'payroll.q_payr_dir.year____',
                 'payroll.q_payr_dir.month___', 'payroll.q_payr_dir.part____', 'payroll.q_payr_dir.seqn_num',
                 'payroll.q_payr_dir.strt_dte', 'payroll.q_payr_dir.last_dte')
        ->get();

        if (request()->ajax()) {
            return datatables($payr_dir)->toJson();
        }
        return view('government.payroll_dir');

    }

    public function getAjax($id)
    {

        // -- used in dynamic table retrieval
        $result = DB::table('payroll.q_payr_dir')
        ->select('payroll.q_payr_dir.cntrl_no', 'payroll.q_payr_dir.appl_prd', 'payroll.q_payr_dir.year____',
                'payroll.q_payr_dir.month___', 'payroll.q_payr_dir.part____', 'payroll.q_payr_dir.seqn_num',
                'payroll.q_payr_dir.strt_dte', 'payroll.q_payr_dir.last_dte')
        ->where('appl_prd', $id)
        ->orderBy('cntrl_no', 'ASC')
        ->get();

        // return response()->json(['data' => $result]);
        // -- YOU must return ajax
        if (request()->ajax()) {
            // take me 5 days to solve this
            // return datatables()->of($result)->toJson();
            return datatables($result)->toJson();
        }

        return view('government.payroll_dir');

    }

    public function search_contributaion(Request $request)
    {
        // -- return is array
        $cntrl_no = $request->get('cntrl_no');

         // -- instead of foreach, We used whereIn clause to loop the array variable
        $sss_hist = DB::table('payroll.q_sss_hist')
        ->select('payroll.q_sss_hist.*')
        ->whereIn('payr_dir', $cntrl_no)
        ->get();

        // -- data for printing/download
        // -- pluck/extract the return array
        $empl_cde = $sss_hist->pluck('empl_cde');
        // $base_sss = $sss_hist->pluck('base_sss');
        // $sss_empl = $sss_hist->pluck('sss_empl');
        // $sss_offc = $sss_hist->pluck('sss_offc');
        // $ecc_offc = $sss_hist->pluck('ecc_offc');
        // $dwld_rmk = $sss_hist->pluck('dwld_rmk');
        // $tran_dte = $sss_hist->pluck('tran_dte');
        // $pos_code = $sss_hist->pluck('pos_code');

        // -- data for printing/download
        // -- instead of foreach, We used whereIn clause to loop the array variable
        $sss_contri = DB::table('common.s_empl_mst', 'pims.l_emplgovn', 'pims.l_emplgenr', 'pims.l_emplpers')
        ->select('common.s_empl_mst.last_nme', 'common.s_empl_mst.frst_nme', 'common.s_empl_mst.midl_nme', 'common.s_empl_mst.midl_ini',
                'pims.l_emplgovn.sss_numb', 'pims.l_emplpers.suffix__', 'pims.l_emplgenr.dte_hire', 'common.s_empl_mst.chge_sss_flag',
                'common.s_empl_mst.chge_last_nme', 'common.s_empl_mst.chge_frst_nme', 'common.s_empl_mst.chge_midl_ini', 'common.s_empl_mst.chge_extn_nme',
                'pims.l_emplgenr.dte_rsgn')
        ->whereIn('common.s_empl_mst.empl_cde', $empl_cde)
        ->join('pims.l_emplgovn', 'pims.l_emplgovn.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        ->join('pims.l_emplgenr', 'pims.l_emplgenr.empl_cde', '=', 'pims.l_emplgovn.empl_cde')
        ->join('pims.l_emplpers', 'pims.l_emplpers.empl_cde', '=', 'pims.l_emplgenr.empl_cde')
        ->get();

        // $merged = merge([$sss_hist, $sss_contri]);

        // dd($merged);
        // -- endpoint
        return view('government.reports.sss_print_download', compact('sss_contri','sss_hist'));

        //return view('government.reports.sss_report', compact('sss_hist'));


    }



}
