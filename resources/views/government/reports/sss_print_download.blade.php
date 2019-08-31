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
                            <th class="text-center" scope="col" id="user_id">SSS #</th>
                            <th class="text-center" scope="col">Family Name</th>
                            <th class="text-center" scope="col">First Name</th>
                            <th class="text-center" scope="col">Middle Name</th>
                            <th class="text-center" scope="col">Employee</th>
                            <th class="text-center" scope="col">Employer</th>
                            <th class="text-center" scope="col">ECC</th>
                            <th class="text-center" scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($sss_contri as $row)

                            @if($row->chge_sss_flag == 'F')

                                <tr class="clickable-row">
                                    <td class="text-center"  scope="row">{{ $row->sss_numb }}</td>
                                    <td class="text-center"  scope="row">{{ $row->last_nme }}</td>
                                    <td class="text-center"  scope="row">{{ $row->frst_nme }}</td>
                                    <td class="text-center"  scope="row">{{ $row->midl_nme }}</td>
                                    <td class="text-center"  scope="row">{{ $row->sss_empl }}</td>
                                    <td class="text-center"  scope="row">{{ $row->sss_offc }}</td>
                                    <td class="text-center"  scope="row">{{ $row->ecc_offc }}</td>
                                    <td class="text-center"  scope="row">{{ number_format($total = $row->sss_empl + $row->sss_offc + $row->ecc_offc,2) }}</td>
                                </tr>

                            @else

                                <tr class="clickable-row">
                                    <td class="text-center"  scope="row">{{ $row->sss_numb }}</td>
                                    <td class="text-center"  scope="row">{{ $row->chge_last_nme.$row->chge_extn_nme}}</td>
                                    <td class="text-center"  scope="row">{{ $row->chge_frst_nme }}</td>
                                    <td class="text-center"  scope="row">{{ $row->chge_midl_ini }}</td>
                                    <td class="text-center"  scope="row">{{ $row->sss_empl }}</td>
                                    <td class="text-center"  scope="row">{{ $row->sss_offc }}</td>
                                    <td class="text-center"  scope="row">{{ $row->ecc_offc }}</td>
                                    <td class="text-center"  scope="row">{{ number_format($total = $row->sss_empl + $row->sss_offc + $row->ecc_offc,2) }}</td>
                                </tr>

                            @endif

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


        </div>
    </div>



@endsection
