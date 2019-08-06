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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Add</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee_data as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->firstnme }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->midl_nme }}</td>
                            <td>{{ $employee->nickname }}</td>
                            <td>{{ $employee->birthday }}</td>
                            <td>{{ $employee->sex_____ }}</td>
                            <td>Edit</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection
