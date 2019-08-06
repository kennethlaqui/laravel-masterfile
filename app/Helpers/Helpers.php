<?php

namespace App\Helpers;
use DB;
use Carbon\Carbon;

class c_pm_generic{


    # call the function class::function_name(null,[value])
    # call function inside view by using @php class::function_name(null,[value]) @endphp and get the return value

    // -- Employee Code
    public static function gf_get_empl_cde(){

        $empl_cde = DB::table('common.s_empl_mst')
        ->max('empl_cde');

        if (is_null(rtrim($empl_cde))){
            $empl_cde = 0;
            $empl_cde ++;
        } else {
            $empl_cde = rtrim($empl_cde);
            $empl_cde ++;
        }

        return $empl_cde;
    }

    // -- Employee Code #2
    public static function gf_get_empl_cd2(){

        $empl_cd2 = DB::table('common.s_empl_mst')
        ->max('empl_cd2');

        if (is_null(rtrim($empl_cd2))){
            $empl_cd2 = 0;
            $empl_cd2 ++;
        } else {
            $empl_cd2 = rtrim($empl_cd2);
            $empl_cd2 ++;
        }

        return $empl_cd2;
    }

    // -- Association ID
    public static function gf_get_asso_cde(){

        $asso_cde = DB::table('common.s_empl_mst')
        ->max('asso_cde');

        if (is_null(rtrim($asso_cde))){
            $asso_cde = rtrim($asso_cde);
            $asso_cde = 0;
            $asso_cde ++;
        } else {
            $asso_cde = rtrim($asso_cde);
            $asso_cde ++;
        }

        return $asso_cde;
    }

    // -- Date format
    // -- Standard for representation of date is mm/dd/yyyy
    public static function gf_convert_date($date_val, $what_to_do){

        switch($what_to_do){

            case 1:
                // -- standard format: mm-dd-yyyy
                if (is_null($date_val)){
                    $date_val = null;

                    return $date_val;
                }else{
                    return Carbon::parse($date_val)->format('m/d/Y');
                }

            case 2:
                 // -- format: yyyy-mm-dd
                // -- set null if date is not available (e.g. Date Regular, Date Resigned, Date End Of Contract)
                if (is_null($date_val)){
                    $date_val = null;

                    return $date_val;
                }else{
                    return Carbon::parse($date_val)->format('Y-m-d');
                }
        }
    }

    // -- Convert Decimal to Percent
    public static function gf_convert_dec_perc($val){

        $percent = $val * 100;

        return $percent;

    }
    // -- Bio ID
    public static function gf_get_chro_num(){

        $chro_num = DB::table('common.s_empl_mst')
        ->max('chro_num');

        if (is_null(rtrim($chro_num))){
            $chro_num = rtrim($chro_num);
            $chro_num = 0;
            $chro_num ++;
        } else {
            $chro_num = rtrim($chro_num);
            $chro_num ++;
        }

        return $chro_num;
    }


    // -- Gender
    public static function gf_build_sex_____(string $sex_____){

        switch($sex_____){
            case 'M':
                return 'Male';
            case 'F':
                return 'Female';
        }

    }

    // -- Civil Status
    public static function gf_build_cvilstat(string $cvilstat){

        switch($cvilstat){
            case 'S':
                return 'Single';
            case 'M':
                return 'Married';
            case 'W':
                return 'Widowed';
        }

    }

    // -- Employment Status
    public static function gf_build_emp_stat(string $empl_stat, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_mplystat')
                ->where('cntrl_no', $empl_stat)
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # empl_stat should be zero (0)
            case 2:
                $result = DB::table('pims.l_mplystat')
                ->where('disabled', 'F')
                ->get();

                return $result;
        }
    }

    // -- Payroll Group
    public static function gf_build_paygroup(string $paygroup, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('payroll.q_paygroup')
                ->where('group_no', $paygroup)
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # paygroup should be zero (0)
            case 2:
                $result = DB::table('payroll.q_paygroup')
                ->where('disabled', 'F')
                ->get();

                return $result;

        }
    }

    // -- Shift Code
    public static function gf_build_shft_cde(string $shft_cde, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_shftfile')
                ->where('shft_cde', $shft_cde)
                ->value('std_shft');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # shft_cde should be zero (0)
            case 2:
                $result = DB::table('pims.l_shftfile')
                ->where('ttl_hrs_', '!=', '0')
                ->where('disabled', 'F')
                ->get();

                return $result;

        }
    }

    // -- Work Status
    public static function gf_build_workstat(string $workstat, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_workstat')
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # workstat should be zero (0)
            case 2:
                $result = DB::table('pims.l_workstat')
                ->where('disabled', 'F')
                ->orderBy('descript')
                ->get();

                return $result;



        }
    }

    // Assigned Location
    public static function gf_buil_emplasgn($emplasgn, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_emplasgn')
                ->where('cntrl_no', $emplasgn)
                ->value('locn_cde');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # emplasgn should be zero (0)
            case 2:
                $result = DB::table('pims.l_emplasgn')
                ->distinct()
                ->get(['locn_cde']);

                return $result;

        }

    }

    // -- Position
    public static function gf_build_position($position, $what_to_do){


        switch($what_to_do){

            case 1:
                $result = DB::table('pims.l_empl_pos')
                ->select('descript')
                ->where('pos_code', $position)
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            case 2:
                $result = DB::table('pims.l_empl_pos')
                ->where('disabled', 'F')
                ->orderBy('descript')
                ->orderBy('descript')
                ->get();

                return $result;

        }
    }

     // -- Group Level (1.Division, 2.Department 3.Section)
    public static function gf_build_grp_lvel(string $grp_lvel, $grp_id, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_grp_lvl'.$grp_lvel)
                ->where('pos_code', $grp_id)
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # grp_lvel should be zero (0)
            case 2:
                $result = DB::table('pims.l_grp_lvl'.$grp_lvel)
                ->where('disabled', 'F')
                ->orderBy('descript')
                ->get();

                return $result;

        }

    }


    // -- Work Area
    public static function gf_build_workarea($workarea,$what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_workarea')
                ->where('cntrl_no', $workarea)
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # workarea should be zero (0)
            case 2:
                $result = DB::table('pims.l_workarea')
                ->where('disabled', 'F')
                ->orderBy('descript')
                ->get();

                return $result;

        }

    }

    // -- OT Group
    public static function gf_build_ot_group($ot_group, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_ot_group')
                ->where('cntrl_no', $ot_group)
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # ot_group should be zero (0)
            case 2:
                $result = DB::table('pims.l_ot_group')
                ->where('disabled', 'F')
                ->orderBy('descript')
                ->get();

                return $result;

        }

    }

    // -- Shuttle Service
    public static function gf_build_shtlsrvc($shtlsrvc, $what_to_do){

        switch($what_to_do){

            # retrieve single record
            # use for textbox
            case 1:
                $result = DB::table('pims.l_shtlsrvc')
                ->where('cntrl_no', $shtlsrvc)
                ->where('disabled', 'F')
                ->value('descript');

                return $result;

            # retrieve many record
            # use for [manipulating data, select-option]
            # shtlsrvc should be zero (0)
            case 2:
                $result = DB::table('pims.l_shtlsrvc')
                ->where('disabled', 'F')
                ->orderBy('descript')
                ->get();

                return $result;

        }

    }

    // -- Government Tin
    public static function gf_build_tax_numb($empl_cde, $what_to_do){

        switch($what_to_do){

            case 1:
                $result = DB::table('pims.l_emplgovn')
                ->where('empl_cde', $empl_cde)
                ->value('tax_numb');

                return $result;

        }

    }

    // -- Government SSS
    public static function gf_build_sss_numb($empl_cde, $what_to_do){

        switch($what_to_do){

            case 1:
                $result = DB::table('pims.l_emplgovn')
                ->where('empl_cde', $empl_cde)
                ->value('sss_numb');

                return $result;

        }

    }

    // -- Government Pagibig
    public static function gf_build_pag_ibig($empl_cde, $what_to_do){

        switch($what_to_do){

            case 1:
                $result = DB::table('pims.l_emplgovn')
                ->where('empl_cde', $empl_cde)
                ->value('pag_ibig');

                return $result;

        }

    }

    // -- Government Philhealth
    public static function gf_build_philhlth($empl_cde, $what_to_do){

        switch($what_to_do){

            case 1:
                $result = DB::table('pims.l_emplgovn')
                ->where('empl_cde', $empl_cde)
                ->value('philhlth');

                return $result;

        }

    }

    // -- Day Type/Rate Type
    public static function gf_get_l_day_type(){

        $result = DB::table('pims.l_day_type')
        ->get();

        return $result;

    }

}
