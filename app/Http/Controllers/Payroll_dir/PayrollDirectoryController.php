<?php

namespace App\Http\Controllers\Payroll_dir;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PayrollDirectoryController extends Controller
{
    public function payroll_dir_header()
    {

        $payr_dir = DB::table('q_payr_dir')
        ->select('q_payr_dir.cntrl_no', 'q_payr_dir.appl_prd', 'q_payr_dir.year____',
                 'q_payr_dir.month___', 'q_payr_dir.part____', 'q_payr_dir.seqn_num',
                 'q_payr_dir.strt_dte', 'q_payr_dir.last_dte')
        ->get();

        // if (request()->ajax()) {
        //     return datatables($payr_dir)->toJson();
        // }
        return view('government.payroll_dir', compact('payr_dir'));
    }

    public function payroll_dir_details($appl_prd)
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

}
