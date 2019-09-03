


@extends('layout')

@section('content')


<table id="sss_download" class="table table-striped table-bordered dt-body-nowrap"  style="width:100%" >
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
                        <td class="text-center"  scope="row">{{ number_format($row->sss_offc,2) }}</td>
                        <td class="text-center"  scope="row">{{ $row->ecc_offc }}</td>
                        <td class="text-center"  scope="row">{{ number_format($row->total,2) }}</td>
                    </tr>

                @else

                    <tr class="clickable-row">
                        <td class="text-center"  scope="row">{{ $row->sss_numb }}</td>
                        <td class="text-center"  scope="row">{{ $row->chge_last_nme.$row->chge_extn_nme}}</td>
                        <td class="text-center"  scope="row">{{ $row->chge_frst_nme }}</td>
                        <td class="text-center"  scope="row">{{ $row->chge_midl_ini }}</td>
                        <td class="text-center"  scope="row">{{ $row->sss_empl }}</td>
                        <td class="text-center"  scope="row">{{ number_format($row->sss_offc,2) }}</td>
                        <td class="text-center"  scope="row">{{ $row->ecc_offc }}</td>
                        <td class="text-center"  scope="row">{{ number_format($row->total,2) }}</td>
                    </tr>

                @endif
            @endforeach
        </tbody>
    </table>
    @endsection
