@extends('dashboard')

<title>New Employee</title>

@section('sidebar')

<div class="row ">
    <div class="col-md-12">

        @include('errors.errors')

        @if(\Session::has('success'))
        <p>{{ \Session::get('success')}}</p>
        @endif

        <form method="POST" action="/employees">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Personal</h6>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label class="control-label" for="empl_cde">ID Number</label>
                            @php
                                $empl_cde = c_pm_generic::gf_get_empl_cde();
                            @endphp
                            <input type="text" name="empl_cde" class="form-control" value={{ $empl_cde }}>
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label" for="numeric">Numeric</label>
                            @php
                                $empl_cd2 = c_pm_generic::gf_get_empl_cd2();
                            @endphp
                            <input type="text" name="empl_cd2" class="form-control" value={{ $empl_cd2 }}>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label" for="alternative">Alternative ID</label>
                            @php
                                $asso_cde = c_pm_generic::gf_get_asso_cde();
                            @endphp
                            <input type="text" name="asso_cde" class="form-control" value={{ $asso_cde }}>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label" for="chro_num">Biometrics ID</label>
                            @php
                                $chro_num = c_pm_generic::gf_get_chro_num();
                            @endphp
                            <input type="text" name="chro_num" class="form-control" value={{ $chro_num }}>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <label class="control-label" for="last_nme">Last Name</label>
                                <input type="text" name="last_nme" class="form-control" value="{{ old('last_nme') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="firstname">First Name</label>
                            <input type="text" name="frst_nme" class="form-control" value="{{ old('frst_nme') }}">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="midl_nme">Middle Name</label>
                            <input type="text" name="midl_nme" class="form-control" value="{{ old('midl_nme') }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label class="control-label" for="midl_nme">MI</label>
                            <input type="text" name="midl_ini" class="form-control" value="{{ old('midl_ini') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="nickname">Nickname</label>
                            <input type="text" name="nickname" class="form-control" value="{{ old('nickname') }}">
                        </div>

                    </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label class="control-label" for="sex_____">Gender</label>
                    <select id="sex_____" name="sex_____" class="form-control">
                            <option value=""></option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label class="control-label" for="cvilstat">Civil Status</label>
                    <select id="cvilstat" name="cvilstat" class="form-control">
                            <option value=""></option>
                            <option value="S">Single</option>
                            <option value="M">Married</option>
                            <option value="W">Widowed</option>
                    </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label class="control-label" for="birthday">Birthday</label>
                        <input name="birthday" class="form-control" id="birthday" value="{{ old('birthday') }}" />

                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="birthday">Birth Place</label>
                        <input type="text" name="birthplc" class="form-control" value="{{ old('birthplc') }}">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-4">
                            <label class="control-label" for="address1">Address #1</label>
                            <input type="text" name="address1" class="form-control" value="{{ old('address1') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="address2">Address #2</label>
                            <input type="text" name="address2" class="form-control" value="{{ old('address2') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="address3">Address #3</label>
                            <input type="text" name="address3" class="form-control" value="{{ old('address3') }}">
                        </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="zip_code">Zip Code</label>
                        <input type="text" name="zip_code" class="form-control" value="{{ old('zip_code') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="tel_numb">Tel No.</label>
                        <input type="text" name="tel_numb" class="form-control" value="{{ old('tel_numb') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="cel_numb">Cell No.</label>
                        <input type="text" name="cel_numb" class="form-control" value="{{ old('cel_numb') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label class="control-label" for="sp_fname">Spouse First Name</label>
                        <input type="text" name="sp_fname" class="form-control" value="{{ old('sp_fname') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="sp_mname">Maiden Name</label>
                        <input type="text" name="sp_mname" class="form-control" value="{{ old('address1') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label" for="sp_b_day">Birthday</label>
                        <input name="sp_b_day" class="form-control" id="sp_b_day" value="{{ old('sp_b_day') }}" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label class="control-label" for="dte_hire">Date Hired</label>
                        <input name="dte_hire" class="form-control" id="dte_hire" value="{{ old('dte_hire') }}"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="dte_rglr">Regularized</label>
                        <input name="dte_rglr" class="form-control" id="dte_rglr" value="{{ old('dte_rglr') }}"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="dte_eoc_">Date of EOC</label>
                        <input name="dte_eoc_" class="form-control" id="dte_eoc_" value="{{ old('dte_eoc_') }}"/>
                    </div>
                    <div class="form-group col-md-3">
                            <label class="control-label" for="dte_rsgn">Resigned</label>
                            <input name="dte_rsgn" class="form-control" id="dte_rsgn" value="{{ old('dte_rsgn') }}"/>
                        </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label class="control-label" for="emp_stat">Employment Status</label>
                        @php
                            $result = c_pm_generic::gf_build_emp_stat(0,2)
                        @endphp
                        <select id="emp_stat" name="emp_stat" class="form-control">
                            @foreach($result as $emp_stat)
                                <option value='{{ $emp_stat->cntrl_no }}'>{{ $emp_stat->descript }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="min_wage">Minimum Wage</label>
                        <select id="min_wage" name="min_wage" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="trainee_">Trainee</label>
                        <select id="trainee_" name="trainee_" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="workstat">Work Status</label>
                        @php
                            $result = c_pm_generic::gf_build_workstat(0,2)
                        @endphp
                        <select id="emp_stat" name="emp_stat" class="form-control">
                            @foreach($result as $workstat)
                                <option value='{{ $workstat->cntrl_no }}'>{{ $workstat->descript }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2">

                        <label class="control-label" for="paygroup">Payroll Group</label>
                        @php
                            $result = c_pm_generic::gf_build_paygroup(0,2)
                        @endphp
                        <select id="paygroup" name="paygroup" class="form-control">
                            @foreach($result as $paygroup)
                                <option value='{{ $paygroup->group_no }}'>{{ $paygroup->descript }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="rate_typ">Rate Type</label>
                        <select id="rate_typ" name="rate_typ" class="form-control">
                            <option value='M'>Monthly</option>
                            <option value='D'>Daily</option>
                        </select>
                    </div>
                </div>
                {{-- radio-button --}}
                <div class="form-check col-md-2">
                    <label class="form-check-label"></label>
                        <input type="checkbox" id ="tmeinout" name="tmeinout" class="form-check-input" value="{{ old('tmeinout') }}">With Time-in/Out
                    </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label"></label>
                        <input type="checkbox" name="bio_reqd" class="form-check-input" value="{{ old('bio_reqd') }}">With F/Scan
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label"></label>
                        <input type="checkbox" name="alw_flex" class="form-check-input" value="{{ old('alw_flex') }}">Allow FlexiTime

                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label"></label>
                        <input type="checkbox" name="brkinreq" class="form-check-input" value="{{ old('brkinreq') }}">Break In Required
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label"></label>
                        <input type="checkbox" name="compweek" class="form-check-input" value="{{ old('compweek') }}">Compress Week
                </div>

                <div class="form-row">

                    <div class="form-group col-md-3">

                        <label class="control-label" for="shft_cde">Shift Schedule</label>
                        @php
                            $result = c_pm_generic::gf_build_shft_cde(0,2)
                        @endphp
                        <select id="shft_cde" name="shft_cde" class="form-control">
                            @foreach($result as $shft_name)
                                <option value='{{ $shft_name->shft_cde }}'>{{ $shft_name->std_shft }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="rest_day">Restday #1</label>
                        <select id="rest_day" name="rest_day" class="form-control">
                            <option value='0'>None</option>
                            <option value='1'>Sunday</option>
                            <option value='2'>Monday</option>
                            <option value='3'>Tuesday</option>
                            <option value='4'>Wednesday</option>
                            <option value='5'>Thursday</option>
                            <option value='6'>Friday</option>
                            <option value='7'>Saturday</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="rest_da2">Restday #2</label>
                        {{-- <input type="text" name="dte_eoc_" class="form-control" value="{{ Ucfirst(strtolower($employee->dte_eoc_)) }}"> --}}
                        <select id="rest_day" name="rest_da2" class="form-control">
                            <option value='0'>None</option>
                            <option value='1'>Sunday</option>
                            <option value='2'>Monday</option>
                            <option value='3'>Tuesday</option>
                            <option value='4'>Wednesday</option>
                            <option value='5'>Thursday</option>
                            <option value='6'>Friday</option>
                            <option value='7'>Saturday</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="emplasgn">Assigned Location</label>
                        @php
                            $result = c_pm_generic::gf_buil_emplasgn(0,2)
                        @endphp
                        <select id="emplasgn" name="emplasgn" class="form-control">
                            @foreach($result as $emplasgn)
                                <option value='{{ $emplasgn->locn_cde }}'>{{ $emplasgn->locn_cde }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label class="control-label" for="pos_code">Position</label>
                        @php
                            $result = c_pm_generic::gf_build_position(0,2)
                        @endphp
                        <select id="pos_code" name="pos_code" class="form-control">
                            @foreach($result as $pos_code)
                                <option value='{{ $pos_code->pos_code }}'>{{ $pos_code->descript }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="grp_lvl1">Group Level #1</label>
                        @php
                            $result = c_pm_generic::gf_build_grp_lvel(1,0,2)
                        @endphp
                        <select id="grp_lvl1" name="grp_lvl1" class="form-control">
                            @foreach($result as $grp_lvl1)
                                <option value='{{ $grp_lvl1->pos_code }}'>{{ $grp_lvl1->descript }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="grp_lvl2">Group Level #2</label>
                        @php
                            $result = c_pm_generic::gf_build_grp_lvel(2,0,2)
                        @endphp
                        <select id="grp_lvl2" name="grp_lvl2" class="form-control">
                            @foreach($result as $grp_lvl2)
                                <option value='{{ $grp_lvl2->pos_code }}'>{{ $grp_lvl2->descript }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="grp_lvl3">Group Level #2</label>
                        @php
                            $result = c_pm_generic::gf_build_grp_lvel(3,0,2)
                        @endphp
                        <select id="grp_lvl3" name="grp_lvl3" class="form-control">
                            @foreach($result as $grp_lvl3)
                                <option value='{{ $grp_lvl3->pos_code }}'>{{ $grp_lvl3->descript }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-3">

                        <label class="control-label" for="workarea">Work Area</label>
                        @php
                            $result = c_pm_generic::gf_build_workarea(0,2)
                        @endphp
                        <select id="workarea" name="workarea" class="form-control">
                            @foreach($result as $workarea)
                                <option value='{{ $workarea->cntrl_no }}'>{{ $workarea->descript }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="shtlsrvc">OT Form Group</label>
                        @php
                            $result = c_pm_generic::gf_build_ot_group(0,2)
                        @endphp
                        <select id="ot_group" name="ot_group" class="form-control">
                            @foreach($result as $ot_group)
                                <option value='{{ $ot_group->cntrl_no }}'>{{ $ot_group->descript }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label" for="shtlsrvc">Shuttle Service</label>
                        @php
                            $result = c_pm_generic::gf_build_shtlsrvc(0,2)
                        @endphp
                        <select id="shtlsrvc" name="shtlsrvc" class="form-control">
                            @foreach($result as $shtlsrvc)
                                <option value='{{ $shtlsrvc->cntrl_no }}'>{{ $shtlsrvc->descript }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label class="control-label" for="chrgrest">Charge Rest Hour</label>
                        <select id="chrgrest" name="chrgrest" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="earlytme">Allow Early Time-in</label>
                        <select id="earlytme" name="earlytme" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="pr_ot_ts">Print OT in TSheet</label>
                        <select id="pr_ot_ts" name="pr_ot_ts" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="alw_ot__">Allow OT</label>
                        <select id="alw_ot__" name="alw_ot__" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="alw_nsd_">Allow NSD</label>
                        <select id="alw_nsd_" name="alw_nsd_" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="alw_hol_">Allow Holiday</label>
                        <select id="alw_hol_" name="alw_hol_" class="form-control">
                            <option value='T'>Yes</option>
                            <option value='F'>No</option>
                        </select>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label class="control-label" for="tax_numb">TIN No.</label>
                        <input type="text" name="tax_numb" class="form-control" value="{{ old('tax_numb') }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="sss_numb">SSS No.</label>
                        <input type="text" name="sss_numb" class="form-control" value="{{ old('sss_numb') }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="pag_ibig">Pagibig No.</label>
                        <input type="text" name="pag_ibig" class="form-control" value="{{ old('dte_rsgn') }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="control-label" for="philhlth">Philhealth No.</label>
                        <input type="text" name="philhlth" class="form-control" value="{{ old('philhlth') }}">
                    </div>

                </div>


                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </div>


@endsection
