@extends('dashboard')

<title>Employees</title>

@section('sidebar')

<div class="row">
    <div class="col-md-12">
        {{-- <h3 align="Left">Employee List</h3> --}}
        {{-- <br /> --}}
        <div align="right">
            <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>
            <br />
            <br />

        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of Employees</h6>
            </div>
            <div class="card-body">
                <table id="empl_tbl" class="table table-striped table-bordered dt-body-nowrap"  style="width:100%" >
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Employee Code</th>
                            <th class="text-center" scope="col">Employee Number</th>
                            <th class="text-center" scope="col">Chro/Finger</th>
                            <th class="text-center" scope="col">Last Name</th>
                            <th class="text-center" scope="col">First Name</th>
                            <th class="text-center" scope="col">Middle Name</th>
                            <th class="text-center" scope="col">MI</th>
                            <th class="text-center" scope="col">Nickname</th>
                            <th class="text-center" scope="col">Suffix</th>
                            <th class="text-center" scope="col">Birthday</th>
                            <th class="text-center" scope="col">Gender</th>
                            <th class="text-center" scope="col">Civil Status</th>
                            <th class="text-center" scope="col">Employment Status</th>
                            <th class="text-center" scope="col">Employee Position</th>
                            <th class="text-center" scope="col">Payroll Group</th>
                            <th class="text-center" scope="col">Rate Type</th>
                            <th class="text-center" scope="col">Date Hired</th>
                            <th class="text-center" scope="col">Date EOC</th>
                            <th class="text-center" scope="col">Date Resigned</th>
                            <th class="text-center" scope="col">Time-in/Out Required</th>
                            <th class="text-center" scope="col">Biometrics Required</th>
                            <th class="text-center" scope="col">Allow Flexi Time</th>
                            <th class="text-center" scope="col">Restday #1</th>
                            <th class="text-center" scope="col">Restday #2</th>
                            <th class="text-center" scope="col">Shift Schedule</th>
                            <th class="text-center" scope="col">Working Compweek</th>
                            <th class="text-center" scope="col">Work Status</th>
                            <th class="text-center" scope="col">Minimum Wage</th>
                            <th class="text-center" scope="col">W/Tax Status</th>
                            <th class="text-center" scope="col">BIR Status</th>
                            <th class="text-center" scope="col">No of Depnd</th>
                            <th class="text-center" scope="col">Tin Number</th>
                            <th class="text-center" scope="col">SSS Number</th>
                            <th class="text-center" scope="col">Pagibig Number</th>
                            <th class="text-center" scope="col">Group Level #1 Division</th>
                            <th class="text-center" scope="col">Group Level #2 Department</th>
                            <th class="text-center" scope="col">Group Level #3 Section</th>
                            <th class="text-center" scope="col">Employee Work Area</th>
                            <th class="text-center" scope="col">OT Form Group</th>
                            <th class="text-center" scope="col">Allow Overtime</th>
                            <th class="text-center" scope="col">Allow Night Shift</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $row)
                        <tr class="clickable-row">
                            <td class="text-center"  scope="row">{{ $row->empl_cde }}</td>
                            <td class="text-center"  scope="row">{{ $row->empl_cd2 }}</td>
                            <td class="text-center"  scope="row">{{ $row->chro_num }}</td>
                            <td>{{ $row->last_nme }}</td>
                            <td>{{ $row->frst_nme }}</td>
                            <td>{{ $row->midl_nme }}</td>
                            <td class="text-center">{{ $row->midl_ini }}</td>
                            <td>{{ $row->nickname }}</td>
                            <td>{{ $row->suffix__ }}</td>
                            <td class="text-center">{{ $row->birthday }}</td>
                            <td>{{ c_pm_generic::gf_build_sex_____($row->sex_____) }}</td>
                            <td>{{ c_pm_generic::gf_build_cvilstat($row->cvilstat) }}</td>
                            <td>{{ c_pm_generic::gf_build_emp_stat($row->emp_stat,1) }}</td> <!-- Employment Status -->
                            <td>{{ c_pm_generic::gf_build_position($row->pos_code,1) }}</td> <!-- Employee Position -->
                            <td>{{ c_pm_generic::gf_build_paygroup($row->paygroup,1) }}</td> <!-- Payroll Group -->
                            <td>{{ (strcmp($row->rate_typ,'D')==0) ? 'Daily' : 'Monthly' }}</td>
                            <td>{{ $row->dte_hire }}</td>
                            <td>{{ $row->dte_eoc_ }}</td>
                            <td>{{ $row->dte_rsgn }}</td>
                            <td>{{ (strcmp($row->tmeinout,'T')==0) ? 'Yes' : 'No' }}</td>
                            <td>{{ (strcmp($row->bio_reqd,'T')==0) ? 'Yes' : 'No' }}</td>
                            <td>{{ (strcmp($row->alw_flex,'T')==0) ? 'Yes' : 'No' }}</td>
                            <td>{{ (strcmp($row->rest_day,1)==0) ? 'Sunday' : 'Saturday' }}</td>
                            <td>{{ (strcmp($row->rest_da2,1)==0) ? 'Sunday' : 'Saturday' }}</td>
                            <td>{{ c_pm_generic::gf_build_shft_cde($row->shft_cde,1) }}</td>
                            {{-- <td>{{ $row->shft_cde }}</td> --}}
                            <td>{{ (strcmp($row->compweek,'T')==0) ? 'Yes' : 'No' }}</td>
                            <td>{{ c_pm_generic::gf_build_workstat($row->workstat,1) }}</td> <!-- Work Status -->
                            <td>{{ (strcmp($row->min_wage,'T')==0) ? 'Yes' : 'No' }}</td>
                            <td>{{ $row->tax_stat }}</td>
                            <td>{{ $row->birstat_ }}</td>
                            <td>{{ $row->dependen }}</td>
                            <td>{{ $row->tax_numb }}</td>
                            <td>{{ $row->sss_numb }}</td>
                            <td>{{ $row->pag_ibig }}</td>
                            <td>{{ c_pm_generic::gf_build_grp_lvel('1',$row->grp_lvl1,1) }}</td> <!-- Division -->
                            <td>{{ c_pm_generic::gf_build_grp_lvel('2',$row->grp_lvl2,1) }}</td> <!-- Department -->
                            <td>{{ c_pm_generic::gf_build_grp_lvel('3',$row->grp_lvl3,1) }}</td> <!-- Section -->
                            <td>{{ c_pm_generic::gf_build_workarea($row->workarea,1) }}</td> <!-- Work Area -->
                            <td>{{ c_pm_generic::gf_build_ot_group($row->ot_group,1) }}</td> <!-- OT Group -->
                            <td>{{ (strcmp($row->alw_ot__,'T')==0) ? 'Yes' : 'No' }}</td>
                            <td>{{ (strcmp($row->alw_nsd_,'T')==0) ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ action('EmployeeController@edit', $row->empl_cde) }}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    {{-- <tfoot>
                        <tr>
                            <th class="text-center" scope="col">Employee Code</th>
                            <th class="text-center" scope="col">Employee Number</th>
                            <th class="text-center" scope="col">Chro/Finger</th>
                            <th class="text-center" scope="col">Last Name</th>
                            <th class="text-center" scope="col">First Name</th>
                            <th class="text-center" scope="col">Middle Name</th>
                            <th class="text-center" scope="col">MI</th>
                            <th class="text-center" scope="col">Nickname</th>
                            <th class="text-center" scope="col">Suffix</th>
                            <th class="text-center" scope="col">Birthday</th>
                            <th class="text-center" scope="col">Gender</th>
                            <th class="text-center" scope="col">Civil Status</th>
                            <th class="text-center" scope="col">Employment Status</th>
                            <th class="text-center" scope="col">Employee Position</th>
                            <th class="text-center" scope="col">Payroll Group</th>
                            <th class="text-center" scope="col">Rate Type</th>
                            <th class="text-center" scope="col">Date Hired</th>
                            <th class="text-center" scope="col">Date EOC</th>
                            <th class="text-center" scope="col">Date Resigned</th>
                            <th class="text-center" scope="col">Time-in/Out Required</th>
                            <th class="text-center" scope="col">Biometrics Required</th>
                            <th class="text-center" scope="col">Allow Flexi Time</th>
                            <th class="text-center" scope="col">Restday #1</th>
                            <th class="text-center" scope="col">Restday #2</th>
                            <th class="text-center" scope="col">Shift Schedule</th>
                            <th class="text-center" scope="col">Working Compweek</th>
                            <th class="text-center" scope="col">Work Status</th>
                            <th class="text-center" scope="col">Minimum Wage</th>
                            <th class="text-center" scope="col">W/Tax Status</th>
                            <th class="text-center" scope="col">BIR Status</th>
                            <th class="text-center" scope="col">No of Depnd</th>
                            <th class="text-center" scope="col">Tin Number</th>
                            <th class="text-center" scope="col">SSS Number</th>
                            <th class="text-center" scope="col">Pagibig Number</th>
                            <th class="text-center" scope="col">Group Level #1 Division</th>
                            <th class="text-center" scope="col">Group Level #2 Department</th>
                            <th class="text-center" scope="col">Group Level #3 Section</th>
                            <th class="text-center" scope="col">Employee Work Area</th>
                            <th class="text-center" scope="col">OT Form Group</th>
                            <th class="text-center" scope="col">Allow Overtime</th>
                            <th class="text-center" scope="col">Allow Night Shift</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
</div>


@endsection


