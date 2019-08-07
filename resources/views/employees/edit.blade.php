@extends("dashboard")

@section('sidebar')

<h1 class="title">Edit Employee"</h1>

<form method="POST" action="/employees/{{ rtrim($employee->empl_cde) }}">
    @method('PATCH')

    @csrf
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Personal</h6>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label class="control-label" for="empl_cde">ID Number</label>
                <input type="text" name="empl_cde" class="form-control" value="{{ rtrim($employee->empl_cde) }}">
                </div>

                <div class="form-group col-md-3">
                    <label class="control-label" for="numeric">Numeric</label>
                    <input type="text" name="empl_cd2" class="form-control" value="{{ rtrim($employee->empl_cd2) }}">
                </div>
                <div class="form-group col-md-3">
                    <label class="control-label" for="alternative">Alternative ID</label>
                    <input type="text" name="asso_cde" class="form-control" value="{{ rtrim($employee->asso_cde) }}">
                </div>
                <div class="form-group col-md-3">
                    <label class="control-label" for="chro_num">Biometrics ID</label>
                    <input type="text" name="chro_num" class="form-control" value="{{ rtrim($employee->chro_num)  }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                        <label class="control-label" for="lastname">Last Name</label>
                        <input type="text" name="last_nme" class="form-control" value="{{ rtrim($employee->last_nme) }}">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label" for="firstname">First Name</label>
                    <input type="text" name="frst_nme" class="form-control" value="{{ rtrim($employee->frst_nme) }}">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="control-label" for="midl_nme">Middle Name</label>
                    <input type="text" name="midl_nme" class="form-control" value="{{ rtrim($employee->midl_nme) }}">
                </div>
                <div class="form-group col-md-2">
                    <label class="control-label" for="midl_nme">MI</label>
                    <input type="text" name="midl_ini" class="form-control" value="{{ rtrim($employee->midl_ini) }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="nickname">Nickname</label>
                    <input type="text" name="nickname" class="form-control" value="{{ Ucfirst(strtolower(rtrim($employee->nickname))) }}">
                </div>

            </div>
        <div class="form-row">
            <div class="form-group col-md-2">
            <label class="control-label" for="sex_____">Gender</label>
            <select id="sex_____" name="sex_____" class="form-control">
                <option value=""></option>
                <option value='M' {{ ($employee->sex_____ == 'M') ? 'selected' : '' }}>Male</option>
                <option value='F' {{ ($employee->sex_____ == 'F') ? 'selected' : '' }}>Female</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label class="control-label" for="cvilstat">Civil Status</label>
            <select id="cvilstat" name="cvilstat" class="form-control">
                    <option value=""></option>
                    <option value='S' {{ ($employee->cvilstat == 'S') ? 'selected' : '' }}>Single</option>
                    <option value='M' {{ ($employee->cvilstat == 'M') ? 'selected' : '' }}>Married</option>
                    <option value='W' {{ ($employee->cvilstat == 'W') ? 'selected' : '' }}>Widowed</option>
            </select>
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="birthday">Birthday</label>
                <input name="birthday" class="form-control" id="birthday" value="{{ c_pm_generic::gf_convert_date($employee->birthday,1) }}">
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="birthday">Birth Place</label>
                <input type="text" name="birthplc" class="form-control" value="{{ Ucfirst(strtolower($employee->birthplc)) }}">
            </div>

        </div>
        <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="control-label" for="address1">Address #1</label>
                    <input type="text" name="address1" class="form-control" value="{{ Ucfirst(strtolower($employee->address1)) }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="address2">Address #2</label>
                    <input type="text" name="address2" class="form-control" value="{{ Ucfirst(strtolower($employee->address2)) }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" for="address3">Address #3</label>
                    <input type="text" name="address3" class="form-control" value="{{ Ucfirst(strtolower($employee->address3)) }}">
                </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label class="control-label" for="zip_code">Zip Code</label>
                <input type="text" name="zip_code" class="form-control" value="{{ Ucfirst(strtolower($employee->zip_code)) }}">
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="tel_numb">Tel No.</label>
                <input type="text" name="tel_numb" class="form-control" value="{{ Ucfirst(strtolower($employee->tel_numb)) }}">
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="cel_numb">Cell No.</label>
                <input type="text" name="cel_numb" class="form-control" value="{{ Ucfirst(strtolower($employee->cel_numb)) }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label class="control-label" for="sp_fname">Spouse First Name</label>
                <input type="text" name="sp_fname" class="form-control" value="{{ Ucfirst(strtolower($employee->sp_fname)) }}">
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="sp_mname">Maiden Name</label>
                <input type="text" name="sp_mname" class="form-control" value="{{ Ucfirst(strtolower($employee->sp_mname)) }}">
            </div>
            <div class="form-group col-md-4">
                <label class="control-label" for="sp_b_day">Birthday</label>
                <input name="sp_b_day" class="form-control" id="sp_b_day" value="{{ c_pm_generic::gf_convert_date($employee->sp_b_day,1) }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label class="control-label" for="dte_hire">Date Hired</label>
                <input name="dte_hire" class="form-control" id="dte_hire" value="{{ c_pm_generic::gf_convert_date($employee->dte_hire,1) }}">
            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="dte_rglr">Regularized</label>
                <input name="dte_rglr" class="form-control" id="dte_rglr" value="{{ c_pm_generic::gf_convert_date($employee->dte_rglr,1) }}">
            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="dte_eoc_">Date of EOC</label>
                <input name="dte_eoc_" class="form-control" id="dte_eoc_" value="{{ c_pm_generic::gf_convert_date($employee->dte_eoc_,1) }}">
            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="dte_rsgn">Resigned</label>
                <input name="dte_rsgn" class="form-control" id="dte_rsgn" value="{{ c_pm_generic::gf_convert_date($employee->dte_rsgn,1) }}">
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
                        <option value='{{ $emp_stat->cntrl_no }}' {{ ($emp_stat->cntrl_no == $employee->emp_stat) ? 'selected' : '' }}>{{ $emp_stat->descript }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="min_wage">Minimum Wage</label>
                <select id="min_wage" name="min_wage" class="form-control">
                    <option value='T' {{ ($employee->min_wage == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->min_wage == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="trainee_">Trainee</label>
                <select id="trainee_" name="trainee_" class="form-control">
                    <option value='T' {{ ($employee->trainee_ == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->trainee_ == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="workstat">Work Status</label>
                {{-- <input type="text" name="workstat" class="form-control" value="{{ Ucfirst(strtolower(c_pm_generic::gf_build_workstat($employee->workstat))) }}"> --}}
                @php
                    $result = c_pm_generic::gf_build_workstat(0,2)
                @endphp
                <select id="workstat" name="workstat" class="form-control">
                    @foreach($result as $workstat)
                        <option value='{{ $workstat->cntrl_no }}' {{ ($workstat->cntrl_no == $employee->workstat) ? 'selected' : '' }}>{{ $workstat->descript }}</option>
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
                        <option value='{{ $paygroup->group_no }}' {{ ($paygroup->group_no == $employee->paygroup) ? 'selected' : '' }}>{{ $paygroup->descript }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="rate_typ">Rate Type</label>
                <select id="rate_typ" name="rate_typ" class="form-control">
                    <option value='M' {{ ($employee->rate_typ == 'M') ? 'selected' : '' }}>Monthly</option>
                    <option value='D' {{ ($employee->rate_typ == 'D') ? 'selected' : '' }}>Daily</option>
                </select>
            </div>
        </div>
        {{-- radio-button --}}
        <div class="form-check col-md-2">
            <label class="form-check-label"></label>
                <input type="checkbox" name="tmeinout" class="form-check-input" {{ (strcmp($employee->tmeinout,'T')==0)? 'checked' : ''}}>With Time-in/Out
            </div>
        <div class="form-check col-md-2">
            <label class="form-check-label"></label>
                <input type="checkbox" name="bio_reqd" class="form-check-input" {{ (strcmp($employee->bio_reqd,'T')==0)? 'checked' : ''}}>With F/Scan

        </div>
        <div class="form-check col-md-2">
            <label class="form-check-label"></label>
                <input type="checkbox" name="alw_flex" class="form-check-input" {{ (strcmp($employee->alw_flex,'T')==0)? 'checked' : ''}}>Allow FlexiTime

        </div>
        <div class="form-check col-md-2">
            <label class="form-check-label"></label>
                <input type="checkbox" name="brkinreq" class="form-check-input" {{ (strcmp($employee->brkinreq,'T')==0)? 'checked' : ''}}>Break In Required
        </div>
        <div class="form-check col-md-2">
            <label class="form-check-label"></label>
                <input type="checkbox" name="compweek" class="form-check-input" {{ (strcmp($employee->compweek,'T')==0)? 'checked' : ''}}>Compress Week
        </div>

        <div class="form-row">

            <div class="form-group col-md-3">

                <label class="control-label" for="shft_cde">Shift Schedule</label>
                @php
                    $result = c_pm_generic::gf_build_shft_cde(0,2)
                @endphp
                <select id="shft_cde" name="shft_cde" class="form-control">
                    @foreach($result as $shft_name)
                        <option value='{{ $shft_name->shft_cde }}' {{ ($shft_name->shft_cde == $employee->shft_cde) ? 'selected' : '' }}>{{ $shft_name->std_shft }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="rest_day">Restday #1</label>
                {{-- <input type="text" name="rest_day" class="form-control" value="{{ Ucfirst(strtolower($employee->dte_rglr)) }}"> --}}
                <select id="rest_day" name="rest_day" class="form-control">
                    <option value='0' {{ ($employee->rest_day == '0') ? 'selected' : '' }}>None</option>
                    <option value='1' {{ ($employee->rest_day == '1') ? 'selected' : '' }}>Sunday</option>
                    <option value='2' {{ ($employee->rest_day == '2') ? 'selected' : '' }}>Monday</option>
                    <option value='3' {{ ($employee->rest_day == '3') ? 'selected' : '' }}>Tuesday</option>
                    <option value='4' {{ ($employee->rest_day == '4') ? 'selected' : '' }}>Wednesday</option>
                    <option value='5' {{ ($employee->rest_day == '5') ? 'selected' : '' }}>Thursday</option>
                    <option value='6' {{ ($employee->rest_day == '6') ? 'selected' : '' }}>Friday</option>
                    <option value='7' {{ ($employee->rest_day == '7') ? 'selected' : '' }}>Saturday</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="rest_da2">Restday #2</label>
                {{-- <input type="text" name="dte_eoc_" class="form-control" value="{{ Ucfirst(strtolower($employee->dte_eoc_)) }}"> --}}
                <select id="rest_day" name="rest_da2" class="form-control">
                    <option value='0' {{ ($employee->rest_day == '0') ? 'selected' : '' }}>None</option>
                    <option value='1' {{ ($employee->rest_day == '1') ? 'selected' : '' }}>Sunday</option>
                    <option value='2' {{ ($employee->rest_day == '2') ? 'selected' : '' }}>Monday</option>
                    <option value='3' {{ ($employee->rest_day == '3') ? 'selected' : '' }}>Tuesday</option>
                    <option value='4' {{ ($employee->rest_day == '4') ? 'selected' : '' }}>Wednesday</option>
                    <option value='5' {{ ($employee->rest_day == '5') ? 'selected' : '' }}>Thursday</option>
                    <option value='6' {{ ($employee->rest_day == '6') ? 'selected' : '' }}>Friday</option>
                    <option value='7' {{ ($employee->rest_day == '7') ? 'selected' : '' }}>Saturday</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="dte_rsgn">Assigned Location</label>
                @php
                    $result = c_pm_generic::gf_buil_emplasgn(0,2)
                @endphp
                <select id="emplasgn" name="emplasgn" class="form-control">
                    @foreach($result as $emplasgn)
                        <option value='{{ $emplasgn->locn_cde }}' {{ ($emplasgn->locn_cde == $employee->locn_cde) ? 'selected' : '' }}>{{ $emplasgn->locn_cde }}</option>
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
                        <option value='{{ $pos_code->pos_code }}' {{ ($pos_code->pos_code == $employee->pos_code) ? 'selected' : '' }}>{{ $pos_code->descript }}</option>
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
                        <option value='{{ $grp_lvl1->pos_code }}' {{ ($grp_lvl1->pos_code == $employee->grp_lvl1) ? 'selected' : '' }}>{{ $grp_lvl1->descript }}</option>
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
                        <option value='{{ $grp_lvl2->pos_code }}' {{ ($grp_lvl2->pos_code == $employee->grp_lvl2) ? 'selected' : '' }}>{{ $grp_lvl2->descript }}</option>
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
                        <option value='{{ $grp_lvl3->pos_code }}' {{ ($grp_lvl3->pos_code == $employee->grp_lvl3) ? 'selected' : '' }}>{{ $grp_lvl3->descript }}</option>
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
                        <option value='{{ $workarea->cntrl_no }}' {{ ($workarea->cntrl_no == $employee->workarea) ? 'selected' : '' }}>{{ $workarea->descript }}</option>
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
                        <option value='{{ $ot_group->cntrl_no }}' {{ ($ot_group->cntrl_no == $employee->ot_group) ? 'selected' : '' }}>{{ $ot_group->descript }}</option>
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
                        <option value='{{ $shtlsrvc->cntrl_no }}' {{ ($shtlsrvc->cntrl_no == $employee->shtlsrvc) ? 'selected' : '' }}>{{ $shtlsrvc->descript }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label class="control-label" for="chrgrest">Charge Rest Hour</label>
                <select id="chrgrest" name="chrgrest" class="form-control">
                    <option value='T' {{ ($employee->chrgrest == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->chrgrest == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="earlytme">Allow Early Time-in</label>
                <select id="earlytme" name="earlytme" class="form-control">
                    <option value='T' {{ ($employee->earlytme == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->earlytme == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="pr_ot_ts">Print OT in TSheet</label>
                <select id="pr_ot_ts" name="pr_ot_ts" class="form-control">
                    <option value='T' {{ ($employee->pr_ot_ts == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->pr_ot_ts == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="alw_ot__">Allow OT</label>
                <select id="alw_ot__" name="alw_ot__" class="form-control">
                    <option value='T' {{ ($employee->alw_ot__ == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->alw_ot__ == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="alw_nsd_">Allow NSD</label>
                <select id="alw_nsd_" name="alw_nsd_" class="form-control">
                    <option value='T' {{ ($employee->alw_nsd_ == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->alw_nsd_ == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="alw_hol_">Allow Holiday</label>
                <select id="alw_hol_" name="alw_hol_" class="form-control">
                    <option value='T' {{ ($employee->alw_hol_ == 'T') ? 'selected' : '' }}>Yes</option>
                    <option value='F' {{ ($employee->alw_hol_ == 'F') ? 'selected' : '' }}>No</option>
                </select>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label class="control-label" for="tax_numb">TIN No.</label>
                <input type="text" name="tax_numb" class="form-control" value="{{ Ucfirst(strtolower(c_pm_generic::gf_build_tax_numb($employee->empl_cde,1))) }}">
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="sss_numb">SSS No.</label>
                <input type="text" name="sss_numb" class="form-control" value="{{ Ucfirst(strtolower(c_pm_generic::gf_build_sss_numb($employee->empl_cde,1))) }}">
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="pag_ibig">Pagibig No.</label>
                <input type="text" name="pag_ibig" class="form-control" value="{{ Ucfirst(strtolower(c_pm_generic::gf_build_pag_ibig($employee->empl_cde,1))) }}">
            </div>
            <div class="form-group col-md-2">
                <label class="control-label" for="philhlth">Philhealth No.</label>
                <input type="text" name="philhlth" class="form-control" value="{{ Ucfirst(strtolower(c_pm_generic::gf_build_philhlth($employee->empl_cde,1))) }}">
            </div>

        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
</div>

</form>

@endsection
