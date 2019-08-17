<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use DB;
use c_pm_generic;


class PayrollController extends Controller
{

    public function compute(){

        return view('payroll.compute');

    }

    public function calculate(Request $request){

        // -- initialize zero
        $drate___ = $request->input('drate___');
        $mrate___ = $request->input('mrate___');
        $day_type = $request->input('day_type');

        if (!Schema::hasTable('pims.l_day_type')) {
            dd('not exist');
        }

        $rate = DB::table('pims.l_day_type')
        ->where('cntrl_no', $day_type)
        ->value('reg_rate');


        if (is_null($rate) or $rate = 0){
            $rate = 0;
        }

        $daily = $drate___ * $rate;

        echo $daily;

        // -- get daily rate
        $drate___ = $mrate___ * 12 / 313;

        dd(number_format($drate___,2));
        echo $drate___ + 1;
        // return view('payroll.calculate', compact($daily));

    }


}
