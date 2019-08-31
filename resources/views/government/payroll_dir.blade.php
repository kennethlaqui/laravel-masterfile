@extends('dashboard')

<title>SSS</title>
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection
@section('sidebar')



<div class="row">
    <div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Payroll Directory</h6>
        </div>
        <div class="card-body">
            <table id="payr_dir" class="table table-striped table-bordered dt-body-nowrap"  style="width:100%" >
                <thead>
                    <tr>
                        <th class="text-center" scope="col" id="user_id">ApplPrd</th>
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
                    {{-- @foreach ($payr_dir as $row)
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
                    @endforeach --}}
                </tbody>
            </table>

        </br>
            <table id="payr_dir_dtls" class="table table-striped table-bordered dt-body-nowrap"  style="width:100%" >
                <thead>
                    <tr>
                        <th class="text-center"  scope="row">Control #</td>
                        <th class="text-center"  scope="row">ApplPrd</td>
                        <th class="text-center"  scope="row">Year</td>
                        <th class="text-center" scope="col">Month</th>
                        <th class="text-center" scope="col">Part</th>
                        <th class="text-center" scope="col">Seq#</th>
                        <th class="text-center" scope="col">DTR Start</th>
                        <th class="text-center" scope="col">DTR End</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <button id="process">Process</button>
        </div>
    </div>


    </div>
</div>

@endsection

@push('scripts')

<script>

    $(document).ready(function() {
        var payr_dir = $('#payr_dir').DataTable({
            orderCellsTop:  true,
            fixedHeader:    true,
            select:         true,
            deferRender:    true,
            scrollY:        200,
            scrollX:        true,
            scrollCollapse: true,
            scroller:       true,
            cache:          false,
            processing:     true,
            serverSide:     true,
            ajax: "{{ route('sss') }}",
            columns: [
                { "data": "appl_prd" },
                { "data": "cntrl_no" },
                { "data": "year____" },
                { "data": "month___" },
                { "data": "part____" },
                { "data": "seqn_num" },
                { "data": "strt_dte" },
                { "data": "last_dte" }
            ]
        });
        $('#payr_dir tbody').on( 'click', 'tr', function () {
            var appl_prd = payr_dir.row( this ).data()['appl_prd'];
            var payr_dir_dtls = $('#payr_dir_dtls').DataTable({
                orderCellsTop:  true,
                fixedHeader:    true,
                select:         true,
                deferRender:    true,
                scrollY:        200,
                scrollX:        true,
                scrollCollapse: true,
                scroller:       true,
                bDestroy:       true,
                cache:          false,
                processing:     false,
                serverSide:     true,
                ajax: {
                    url : "sss/"+appl_prd
                },
                columns: [
                    { "data": "cntrl_no" },
                    { "data": "appl_prd" },
                    { "data": "year____" },
                    { "data": "month___" },
                    { "data": "part____" },
                    { "data": "seqn_num" },
                    { "data": "strt_dte" },
                    { "data": "last_dte" }
                ]
            });
            $('#process').click(function () {
                var arr = [];
                $.each(payr_dir_dtls.rows('.selected').data(), function() {
                    arr.push(this["cntrl_no"]);

                });
                $.ajax({
                    url : 'sss/print/{payr_dir}',
                    data : { payr_dir : arr },
                });

            });


        });



    });

</script>
{{-- var rowData = payr_dir_dtls.row( this ).data();
$.each($(rowData),function(key,value){
    arr.push(value["cntrl_no"]); //"name" being the value of your first column.
    $.ajax({
        url : 'sss/print/'+arr
    });
}); --}}
{{-- url : "{{ route('get.data', ['id'=> ]) }}"
data: { id: appl_prd } --}}
@endpush()







