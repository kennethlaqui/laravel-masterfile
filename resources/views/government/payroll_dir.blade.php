@extends('dashboard')

<title>SSS</title>

@section('sidebar')



<div class="row">
    <div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Payroll Directory</h6>
        </div>
        <div class="card-body">
            <table id="payr_dir" class="table table-striped table-bordered"  style="width:100%" >
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ApplPrd</th>
                        <th class="text-center" scope="col">Control #</th>
                        <th class="text-center" scope="col">Year</th>
                        <th class="text-center" scope="col">Month</th>
                        <th class="text-center" scope="col">Part</th>
                        <th class="text-center" scope="col">Seq#</th>
                        <th class="text-center" scope="col">DTR Start</th>
                        <th class="text-center" scope="col">DTR End</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payr_dir as $row)
                    <tr class="clickable-row">
                        <td class="text-center"  scope="row">{{ $row->appl_prd }}</td>
                        <td class="text-center"  scope="row">{{ $row->cntrl_no }}</td>
                        <td class="text-center"  scope="row">{{ $row->year____ }}</td>
                        <td class="text-center"  scope="row">{{ $row->month___ }}</td>
                        <td class="text-center"  scope="row">{{ $row->part____ }}</td>
                        <td class="text-center"  scope="row">{{ $row->seqn_num }}</td>
                        <td class="text-center"  scope="row">{{ $row->strt_dte }}</td>
                        <td class="text-center"  scope="row">{{ $row->last_dte }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </br>
            <table id="payr_dtl" class="table table-striped table-bordered"  style="width:100%" >
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Control #</th>
                        <th class="text-center" scope="col">ApplPrd</th>
                        <th class="text-center" scope="col">ApplPrdxgit</th>
                        {{-- <th class="text-center" scope="col">Year</th>
                        <th class="text-center" scope="col">Month</th>
                        <th class="text-center" scope="col">Part</th>
                        <th class="text-center" scope="col">Seq#</th>
                        <th class="text-center" scope="col">DTR Start</th>
                        <th class="text-center" scope="col">DTR End</th> --}}
                    </tr>
                </thead>
                {{-- <tbody> --}}

                    {{-- @foreach ($payr_dir as $row)
                    {{-- <tr class="clickable-row"> --}}
                        {{-- <td class="text-center"  scope="row">{{ $row->appl_prd }}</td>
                        <td class="text-center"  scope="row">{{ $row->cntrl_no }}</td> --}}
                        {{-- <td class="text-center"  scope="row">{{ $row->year____ }}</td>
                        <td class="text-center"  scope="row">{{ $row->month___ }}</td>
                        <td class="text-center"  scope="row">{{ $row->part____ }}</td>
                        <td class="text-center"  scope="row">{{ $row->seqn_num }}</td>
                        <td class="text-center"  scope="row">{{ $row->strt_dte }}</td>
                        <td class="text-center"  scope="row">{{ $row->last_dte }}</td> --}}
                    </tr>
                    {{-- @endforeach --}}
                {{-- </tbody> --}}
            </table>
        </div>
    </div>


    </div>
</div>


@endsection
