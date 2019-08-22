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
        ->get()
        ->toArray();

        return view('government.payroll_dir', compact('payr_dir'));

    }

    public function getAjax(Request $request)
    {
        $id = $_GET['id'];
        // $id = Input::get("id");
        // dd($id);
        $result = DB::table('payroll.q_payr_dir')
        ->where('appl_prd', $id)
        ->get();
        // dd($result);

        // foreach($result as $row)
        // {
        //     $html =

        //         '<tr>
        //             <td>' . $row->cntrl_no . '</td>' .
        //             '<td>' . $row->appl_prd . '</td>' .
        //         '</tr>';
        // }
        return response()->json(['return' => $result]);

        // return $result;
    }
}
