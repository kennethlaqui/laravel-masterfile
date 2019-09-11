<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class SssController extends Controller
{

    public function index()
    {
        //
    }

    public function search_contribution_view(Request $request)
    {
        // -- return is array
        $payr_dir = $request->get('payr_dir');

        // dd($payr_dir);

        // -- data for printing/download
        // -- instead of foreach, We used whereIn clause to loop the array variable
        $sss_contri = DB::table('s_empl_mst', 'l_emplgovn', 'l_emplgenr', 'l_emplpers', 'q_sss_hist')
        ->selectRaw('s_empl_mst.last_nme,      s_empl_mst.frst_nme,      s_empl_mst.midl_nme,      s_empl_mst.midl_ini,
                     s_empl_mst.chge_last_nme, s_empl_mst.chge_frst_nme, s_empl_mst.chge_midl_ini, s_empl_mst.chge_extn_nme,
                     s_empl_mst.chge_sss_flag, l_emplgenr.dte_hire,      l_emplgenr.dte_rsgn,      l_emplgovn.sss_numb,
                     l_emplpers.suffix__,
                     sum(sss_empl) as sss_empl,
                     sum(sss_offc) as sss_offc,
                     sum(ecc_offc) as ecc_offc,
                     sum(sss_empl + sss_offc + ecc_offc) as total')
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

        return view('government.reports.sss_contri_view', compact('sss_contri'));
    }

    public function search_contribution_print_download(Request $request)
    {
        // -- return is array
        $payr_dir = $request->get('payr_dir');

        // dd($payr_dir);

        // -- data for printing/download
        // -- instead of foreach, We used whereIn clause to loop the array variable
        $sss_contri = DB::table('s_empl_mst', 'l_emplgovn', 'l_emplgenr', 'l_emplpers', 'q_sss_hist')
        ->selectRaw('s_empl_mst.last_nme,      s_empl_mst.frst_nme,      s_empl_mst.midl_nme,      s_empl_mst.midl_ini,
                     s_empl_mst.chge_last_nme, s_empl_mst.chge_frst_nme, s_empl_mst.chge_midl_ini, s_empl_mst.chge_extn_nme,
                     s_empl_mst.chge_sss_flag, l_emplgenr.dte_hire,      l_emplgenr.dte_rsgn,      l_emplgovn.sss_numb,
                     l_emplpers.suffix__,
                     sum(sss_empl) as sss_empl,
                     sum(sss_offc) as sss_offc,
                     sum(ecc_offc) as ecc_offc,
                     sum(sss_empl + sss_offc + ecc_offc) as total')
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

        $pdf = PDF::loadView('government.reports.sss_print_download', compact('sss_contri'));
        return $pdf->stream();
        // return $pdf->download('sss_contribution.pdf');
    }
}
