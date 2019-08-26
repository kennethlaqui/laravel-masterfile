@extends('dashboard')

@section('sidebar')

<div class="row">
        <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SSS Print / Download</h6>
            </div>
            <div class="card-body">
                <table id="payr_dir" class="table table-striped table-bordered dt-body-nowrap"  style="width:100%" >
                    <thead>
                        <tr>
                            <th class="text-center" scope="col" id="user_id">Employee Code</th>
                            <th class="text-center" scope="col">Payroll Directory</th>
                            <th class="text-center" scope="col">SSS Employee</th>
                            <th class="text-center" scope="col">Last Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sss_hist as $row)
                        <tr class="clickable-row">
                            <td class="text-center"  scope="row">{{ $row->empl_cde }}</td>
                            <td class="text-center"  scope="row">{{ $row->payr_dir }}</td>
                            <td class="text-center"  scope="row">{{ $row->sss_empl }}</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        </div>
    </div>



@endsection
