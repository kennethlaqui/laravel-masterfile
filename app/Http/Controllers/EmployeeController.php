<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Employee;
use DB;
use c_pm_generic;


class EmployeeController extends Controller
{
    public function index()
    {
        // $employees = DB::table('common.s_empl_mst', 'pims.l_emplgenr', 'pims.l_emplpers', 'payroll.q_empl_pyr', 'pims.l_shftfile', 'pims.l_grp_lvl1',
        //                        'pims.l_workarea', 'pims.l_ot_group', 'pims.l_empl_pos', 'payroll.q_paygroup', 'pims.l_mplystat', 'pims.l_workstat')
        // ->join('pims.l_emplgenr', 'pims.l_emplgenr.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        // ->join('pims.l_emplgovn', 'pims.l_emplgovn.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        // ->join('pims.l_emplpers', 'pims.l_emplpers.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        // ->join('payroll.q_empl_pyr', 'payroll.q_empl_pyr.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        // ->join('pims.l_shftfile', 'pims.l_shftfile.shft_cde', '=', 'pims.l_emplgenr.shft_cde')
        // ->join('pims.l_grp_lvl1', 'pims.l_grp_lvl1.pos_code', '=', 'pims.l_emplgenr.grp_lvl1')
        // ->join('pims.l_grp_lvl2', 'pims.l_grp_lvl2.pos_code', '=', 'pims.l_emplgenr.grp_lvl2')
        // ->join('pims.l_grp_lvl3', 'pims.l_grp_lvl3.pos_code', '=', 'pims.l_emplgenr.grp_lvl3')
        // ->join('pims.l_workarea', 'pims.l_workarea.cntrl_no', '=', 'pims.l_emplgenr.workarea')
        // ->join('pims.l_ot_group', 'pims.l_ot_group.cntrl_no', '=', 'pims.l_emplgenr.ot_group')
        // ->join('pims.l_empl_pos', 'pims.l_empl_pos.pos_code', '=', 'pims.l_emplgenr.pos_code')
        // ->join('payroll.q_paygroup', 'payroll.q_paygroup.group_no', '=', 'payroll.q_empl_pyr.paygroup')
        // ->join('pims.l_mplystat', 'pims.l_mplystat.cntrl_no', '=', 'pims.l_emplgenr.emp_stat')
        // ->join('pims.l_workstat', 'pims.l_workstat.cntrl_no', '=', 'common.s_empl_mst.workstat')
        // ->select('common.s_empl_mst.*','pims.l_emplgenr.*', 'pims.l_emplgovn.*','pims.l_emplpers.*', 'payroll.q_empl_pyr.*', 'pims.l_shftfile.std_shft',
        //          'pims.l_grp_lvl1.descript as div_desc', 'pims.l_grp_lvl2.descript as dep_desc', 'pims.l_grp_lvl3.descript as sec_desc', 'pims.l_workarea.descript as wrk_desc',
        //          'pims.l_ot_group.descript as ot__desc', 'pims.l_empl_pos.pos_code as position', 'payroll.q_paygroup.descript as pyg_desc', 'pims.l_mplystat.descript as mpl_desc',
        //          'pims.l_workstat.descript as wrk_desc')
        // ->orderBy('common.s_empl_mst.delete__', 'desc')
        // ->orderBy('common.s_empl_mst.last_nme','asc')
        // ->orderBy('common.s_empl_mst.frst_nme', 'asc')
        // ->get()
        // ->toArray();

        $employees = DB::table('common.s_empl_mst', 'pims.l_emplgenr', 'pims.l_emplpers', 'pims.l_emplgovn.empl_cde', 'payroll.q_empl_pyr')
        ->join('pims.l_emplgenr', 'pims.l_emplgenr.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        ->join('pims.l_emplgovn', 'pims.l_emplgovn.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        ->join('pims.l_emplpers', 'pims.l_emplpers.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        ->join('payroll.q_empl_pyr', 'payroll.q_empl_pyr.empl_cde', '=', 'pims.l_emplgovn.empl_cde')
        ->select('common.s_empl_mst.*', 'pims.l_emplgenr.*', 'pims.l_emplgovn.*', 'pims.l_emplpers.*', 'payroll.q_empl_pyr.*')
        ->get()
        ->toArray();

        // dd($employees);

        return view('employees.index', compact('employees'));

    }

<<<<<<< HEAD
    public function create()
    {

        return view('employees.create');

    }

=======
>>>>>>> 1ec2c393cf0cd750ea01967aef284f34d4a369c6
    public function store(Request $request)
    {


        DB::beginTransaction();

        try{

            // $this->validate($request, [
            //     'empl_cde' => 'required',
            //     'empl_cd2' => 'required',
            //     'asso_cde' => 'required',
            //     'chro_num' => 'required',
            //     'last_nme' => 'required',
            //     'frst_nme' => 'required',
            //     'birthday' => 'required',
            //     'sex_____' => 'required',
            //     'workstat' => 'required',
            // ]);

            // -- reformat date to yyyy-mm-dd use for database only
            $birthday = c_pm_generic::gf_convert_date($request->get('birthday'),2);

            // -- insert to common.s_empl_mst
            DB::table('common.s_empl_mst')
            ->insert([
                'empl_cde' => $request->get('empl_cde'),
                'empl_cd2' => $request->get('empl_cd2'),
                'asso_cde' => $request->get('asso_cde'),
                'chro_num' => $request->get('chro_num'),
                'last_nme' => $request->get('last_nme'),
                'frst_nme' => $request->get('frst_nme'),
                'midl_nme' => $request->get('midl_nme'),
                'midl_ini' => $request->get('midl_ini'),
                'nickname' => $request->get('nickname'),
                'sex_____' => $request->get('sex_____'),
                'birthday' => $birthday,
                'workstat' => $request->get('emp_stat'),
                'payr_use' => 'T',
                'delete__' => 'F',
                'locn_cde' => $request->get('emplasgn'),
                'view_id_' => $request->get('empl_cde'),
                'view_pwd' => Hash::make($request->get('empl_cde')),
                'vwschdhd' => 1,
                'vw_stat_' => '.',
                'py_vw_pw' => '.',
                'chge_sss_flag' => 'F',
            ]);

            // -- reformat date to yyyy-mm-dd use for database only
            $sp_b_day = c_pm_generic::gf_convert_date($request->get('sp_b_day'),2);

            // -- insert to pims.l_emplpers
            DB::table('pims.l_emplpers')
            ->insert([
                'empl_cde' => $request->get('empl_cde'),
                'birthplc' => $request->get('birthplc'),
                'cvilstat' => $request->get('cvilstat'),
                'sp_fname' => $request->get('sp_fname'),
                'sp_mname' => $request->get('sp_mname'),
                'sp_b_day' => $sp_b_day,
                'address1' => $request->get('address1'),
                'address2' => $request->get('address2'),
                'address3' => $request->get('address3'),
                'zip_code' => $request->get('zip_code'),
                'tel_numb' => $request->get('tel_numb'),
                'cel_numb' => $request->get('cel_numb'),
                'temp_adr' => '',
                'adr_brgy' => 0,
                'adr_muni' => 0,
                'adr_city' => 0,
                'adr_prov' => 0,
                'claim_xm' => 'F',
                'tax_addr' => '',
                'zip_cod2' => '',
                'prefix__' => 0,
                'suffix__' => 0,
                'sp_ocptn' => 0,
                'sp_conme' => '',
                'sp_coadr' => '',
                'sp_cotel' => '',
                'sp_celno' => '',
                'em_name_' => '',
                'em_telno' => '',
            ]);

            // -- reformat date to yyyy-mm-dd use for database only
            $dte_hire = c_pm_generic::gf_convert_date($request->get('dte_hire'),2);
            $dte_rglr = c_pm_generic::gf_convert_date($request->get('dte_rglr'),2);
            $dte_rsgn = c_pm_generic::gf_convert_date($request->get('dte_rsgn'),2);
            $dte_eoc_ = c_pm_generic::gf_convert_date($request->get('dte_eoc_'),2);

            // -- insert to pims.l_emplgenr
            DB::table('pims.l_emplgenr')
            ->insert([
                'empl_cde' => $request->get('empl_cde'),
                'dte_hire' => $dte_hire,
                'dte_rglr' => $dte_rglr,
                'dte_rsgn' => $dte_rsgn,
                'emp_stat' => $request->get('emp_stat'),
                'pos_code' => $request->get('pos_code'),
                'pos_lvel' => 0,
                'grp_lvl1' => $request->get('grp_lvl1'),
                'grp_lvl2' => $request->get('grp_lvl2'),
                'grp_lvl3' => $request->get('grp_lvl3'),
                'workarea' => $request->get('workarea'),
                'cost_cde' => 0,
                'ot_group' => $request->get('ot_group'),
                'alw_flex' => 'T',
                'bio_reqd' => 'T',
                'brkinreq' => 'T',
                'locn_cde' => $request->get('emplasgn'),
                'shft_cde' => $request->get('shft_cde'),
                'rest_day' => $request->get('rest_day'),
                'rest_da2' => $request->get('rest_da2'),
                'emplasgn' => 0,
                'shtlsrvc' => $request->get('shtlsrvc'),
                'empl_rmk' => 1,
                'remarks_' => '',
                'ms_sort_' => 0,
                'trainee_' => $request->get('trainee_'),
                'chrgrest' => $request->get('chrgrest'),
                'earlytme' => $request->get('earlytme'),
                'dte_eoc_' => $dte_eoc_,
                'min_wage' => $request->get('min_wage'),
                'pr_ot_ts' => $request->get('pr_ot_ts'),
                'tmeinout' => 'T',
                'flex_typ' => '',
                'flex_hrs' => 0.00,
                'flex_str' => '',
                'flex_lst' => '',
                'alw_ot__' => $request->get('alw_ot__'),
                'alw_nsd_' => $request->get('alw_nsd_'),
                'compweek' => '',
                'alw_hol_' => $request->get('alw_hol_'),
                'cww_days' => 0,
            ]);

            // -- insert to pims.l_emplgovn
            DB::table('pims.l_emplgovn')
            ->insert([
                'empl_cde' => $request->get('empl_cde'),
                'tax_numb' => $request->get('tax_numb'),
                'sss_numb' => $request->get('sss_numb'),
                'pag_ibig' => $request->get('pag_ibig'),
                'philhlth' => $request->get('philhlth'),
                'gel_numb' => '0',
            ]);

            DB::table('payroll.q_empl_pyr')
            ->insert([
                'empl_cde' => $request->get('empl_cde'),
                'bankfile' => 0,
                'acct_typ' => '',
                'acct_num' => '',
                'tax_stat' => '',
                'birstat_' => '',
                'dependen' => 0,
                'pgbig_cd' => '',
                'pg_emply' => 0.00,
                'pg_emplr' => 0.00,
                'sss_empl' => 0.00,
                'sss_ofce' => 0.00,
                'ecc_ofce' => 0.00,
                'comp_tax' => '',
                'comp_sss' => '',
                'comp_med' => '',
                'comp_pgi' => '',
                'paygroup' => $request->get('paygroup'),
                'tax_over' => '',
                'dailydiv' => 26.08,
                'compfreq' => '',
                'rate_typ' => 'M',
                'hrate___' => 0.00,
                'drate___' => 0.00,
                'mrate___' => 0.00,
                'fix_wtax' => '',
                'fixpart1' => 0.00,
                'fixpart2' => 0.00,
                'tax_type' => '',
                'pg2emply' => 0.00,
                'pg2emplr' => 0.00,
                'sss2empl' => 0.00,
                'sss2offc' => 0.00,
                'ecc2offc' => 0.00,
                'med_empl' => 0.00,
                'med_offc' => 0.00,
                'med2empl' => 0.00,
                'med2offc' => 0.00,
            ]);


        } catch(ValidationException $e)
        {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return Redirect::to('/form')
                ->withErrors( $e->getErrors() )
                ->withInput();
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;

        }
        DB::commit();
        return redirect()->route('employees.index')->with('success', 'Data Added');


    }

<<<<<<< HEAD
    public function edit($empl_cde)
    {

        $employee = DB::table('common.s_empl_mst', 'pims.l_emplgenr', 'pims.l_emplpers', 'payroll.q_empl_pyr')
        ->join('pims.l_emplgenr', 'pims.l_emplgenr.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        ->join('pims.l_emplpers', 'pims.l_emplpers.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        ->join('payroll.q_empl_pyr', 'payroll.q_empl_pyr.empl_cde', '=', 'common.s_empl_mst.empl_cde')
        ->where('common.s_empl_mst.empl_cde', $empl_cde)
        ->select('common.s_empl_mst.*', 'pims.l_emplgenr.*', 'pims.l_emplpers.*', 'payroll.q_empl_pyr.*')
        ->first();

        return view('employees.edit', compact('employee'));

    }
    public function update(Request $request, $empl_cde){


        DB::beginTransaction();

        try{
            // -- reformat date to yyyy-mm-dd use for database only

            $birthday = c_pm_generic::gf_convert_date($request->get('birthday'),2);

            DB::table('common.s_empl_mst')
            ->where('empl_cde', $empl_cde)
            ->update([
                'empl_cde' => $request->get('empl_cde'),
                'empl_cd2' => $request->get('empl_cd2'),
                'asso_cde' => $request->get('asso_cde'),
                'chro_num' => $request->get('chro_num'),
                'last_nme' => $request->get('last_nme'),
                'frst_nme' => $request->get('frst_nme'),
                'midl_nme' => $request->get('midl_nme'),
                'midl_ini' => $request->get('midl_ini'),
                'nickname' => $request->get('nickname'),
                'sex_____' => $request->get('sex_____'),
                'birthday' => $birthday,
                'workstat' => $request->get('emp_stat'),
                'payr_use' => 'T',
                'delete__' => 'F',
                'locn_cde' => $request->get('emplasgn'),
                'view_id_' => $request->get('empl_cde'),
                'view_pwd' => Hash::make($request->get('empl_cde')),
                'vwschdhd' => 1,
                'vw_stat_' => '.',
                'py_vw_pw' => '.',
                'chge_sss_flag' => 'F',

            ]);

            // -- reformat date to yyyy-mm-dd use for database only
            $sp_b_day = c_pm_generic::gf_convert_date($request->get('sp_b_day'),2);

            // -- insert to pims.l_emplpers
            DB::table('pims.l_emplpers')
            ->where('empl_cde', $empl_cde)
            ->update([
                'empl_cde' => $request->get('empl_cde'),
                'birthplc' => $request->get('birthplc'),
                'cvilstat' => $request->get('cvilstat'),
                'sp_fname' => $request->get('sp_fname'),
                'sp_mname' => $request->get('sp_mname'),
                'sp_b_day' => $sp_b_day,
                'address1' => $request->get('address1'),
                'address2' => $request->get('address2'),
                'address3' => $request->get('address3'),
                'zip_code' => $request->get('zip_code'),
                'tel_numb' => $request->get('tel_numb'),
                'cel_numb' => $request->get('cel_numb'),
                'temp_adr' => '',
                'adr_brgy' => 0,
                'adr_muni' => 0,
                'adr_city' => 0,
                'adr_prov' => 0,
                'claim_xm' => 'F',
                'tax_addr' => '',
                'zip_cod2' => '',
                'prefix__' => 0,
                'suffix__' => 0,
                'sp_ocptn' => 0,
                'sp_conme' => '',
                'sp_coadr' => '',
                'sp_cotel' => '',
                'sp_celno' => '',
                'em_name_' => '',
                'em_telno' => '',
            ]);

            // -- reformat date to yyyy-mm-dd use for database only
            $dte_hire = c_pm_generic::gf_convert_date($request->get('dte_hire'),2);
            $dte_rglr = c_pm_generic::gf_convert_date($request->get('dte_rglr'),2);
            $dte_rsgn = c_pm_generic::gf_convert_date($request->get('dte_rsgn'),2);
            $dte_eoc_ = c_pm_generic::gf_convert_date($request->get('dte_eoc_'),2);

            // -- insert to pims.l_emplgenr
            DB::table('pims.l_emplgenr')
            ->where('empl_cde', $empl_cde)
            ->update([
                'empl_cde' => $request->get('empl_cde'),
                'dte_hire' => $dte_hire,
                'dte_rglr' => $dte_rglr,
                'dte_rsgn' => $dte_rsgn,
                'emp_stat' => $request->get('emp_stat'),
                'pos_code' => $request->get('pos_code'),
                'pos_lvel' => 0,
                'grp_lvl1' => $request->get('grp_lvl1'),
                'grp_lvl2' => $request->get('grp_lvl2'),
                'grp_lvl3' => $request->get('grp_lvl3'),
                'workarea' => $request->get('workarea'),
                'cost_cde' => 0,
                'ot_group' => $request->get('ot_group'),
                'alw_flex' => 'T',
                'bio_reqd' => 'T',
                'brkinreq' => 'T',
                'locn_cde' => $request->get('emplasgn'),
                'shft_cde' => $request->get('shft_cde'),
                'rest_day' => $request->get('rest_day'),
                'rest_da2' => $request->get('rest_da2'),
                'emplasgn' => 0,
                'shtlsrvc' => $request->get('shtlsrvc'),
                'empl_rmk' => 1,
                'remarks_' => '',
                'ms_sort_' => 0,
                'trainee_' => $request->get('trainee_'),
                'chrgrest' => $request->get('chrgrest'),
                'earlytme' => $request->get('earlytme'),
                'dte_eoc_' => $dte_eoc_,
                'min_wage' => $request->get('min_wage'),
                'pr_ot_ts' => $request->get('pr_ot_ts'),
                'tmeinout' => 'T',
                'flex_typ' => '',
                'flex_hrs' => 0.00,
                'flex_str' => '',
                'flex_lst' => '',
                'alw_ot__' => $request->get('alw_ot__'),
                'alw_nsd_' => $request->get('alw_nsd_'),
                'compweek' => '',
                'alw_hol_' => $request->get('alw_hol_'),
                'cww_days' => 0,
            ]);

            // -- insert to pims.l_emplgovn
            DB::table('pims.l_emplgovn')
            ->where('empl_cde', $empl_cde)
            ->update([
                'empl_cde' => $request->get('empl_cde'),
                'tax_numb' => $request->get('tax_numb'),
                'sss_numb' => $request->get('sss_numb'),
                'pag_ibig' => $request->get('pag_ibig'),
                'philhlth' => $request->get('philhlth'),
                'gel_numb' => '0',
            ]);

            DB::table('payroll.q_empl_pyr')
            ->where('empl_cde', $empl_cde)
            ->update([
                'empl_cde' => $request->get('empl_cde'),
                'bankfile' => 0,
                'acct_typ' => '',
                'acct_num' => '',
                'tax_stat' => '',
                'birstat_' => '',
                'dependen' => 0,
                'pgbig_cd' => '',
                'pg_emply' => 0.00,
                'pg_emplr' => 0.00,
                'sss_empl' => 0.00,
                'sss_ofce' => 0.00,
                'ecc_ofce' => 0.00,
                'comp_tax' => '',
                'comp_sss' => '',
                'comp_med' => '',
                'comp_pgi' => '',
                'paygroup' => $request->get('paygroup'),
                'tax_over' => '',
                'dailydiv' => 26.08,
                'compfreq' => '',
                'rate_typ' => 'M',
                'hrate___' => 0.00,
                'drate___' => 0.00,
                'mrate___' => 0.00,
                'fix_wtax' => '',
                'fixpart1' => 0.00,
                'fixpart2' => 0.00,
                'tax_type' => '',
                'pg2emply' => 0.00,
                'pg2emplr' => 0.00,
                'sss2empl' => 0.00,
                'sss2offc' => 0.00,
                'ecc2offc' => 0.00,
                'med_empl' => 0.00,
                'med_offc' => 0.00,
                'med2empl' => 0.00,
                'med2offc' => 0.00,
            ]);

        }catch(ValidationException $e)
        {
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return Redirect::to('/form')
                ->withErrors( $e->getErrors() )
                ->withInput();
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;

        }
        DB::commit();
        return redirect('/employees');

    }

    public function show(Employee $employee)
    {


    }
=======
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));

    }

    // public function show(Employee $employee)
    // {

    //   return view('employees.show', compact('employee'));
    // }
>>>>>>> 1ec2c393cf0cd750ea01967aef284f34d4a369c6
}
