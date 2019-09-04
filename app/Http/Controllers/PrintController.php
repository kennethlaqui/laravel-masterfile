<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PrintController extends Controller
{
    public function index()
    {

        return view('print.print');

    }

    public function print_data(Request $request)
    {

        // dd($request->all());
        $sss_contri = $request->except('_token');
        // dd($sss_contri);
        $pdf = PDF::loadView('government.reports.tables_only', compact('sss_contri'));
        return $pdf->download('sss_contribution.pdf');

    }
}
