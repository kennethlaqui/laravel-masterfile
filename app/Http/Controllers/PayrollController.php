<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use c_pm_generic;


class PayrollController extends Controller
{

    public function compute(){

        return view('payroll.compute');

    }

    public function calculate(Request $request){

        $drate___ = $request->input('drate___');
        $day_type = $request->input('day_type');

        $rate = DB::table('pims.l_day_type')
        ->where('cntrl_no', $day_type)
        ->value('reg_rate');

        if (is_null($rate) or $rate = 0){
            $rate = 0;
        }

        $daily = $drate___ * $rate;

        echo $daily;
        // return view('payroll.calculate', compact($daily));

    }
}
