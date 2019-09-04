@extends('dashboard')

@section('sidebar')

<div class="row">
        <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SSS Print / Download</h6>
            </div>
            <div class="card-body">
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
                <div class="form-group">
                    <form action="{{ route('sss.print') }}" method="post">
                        @csrf
                        @foreach ($sss_contri as $contribution)
                            <input type="hidden" name="data[]" value="{{ $contribution->sss_numb }}">
                            {{-- <input type="hidden" name="data[]" value="{{ $contribution->last_nme }}"> --}}
                        @endforeach

                        <input type="submit" value="Print">
                    </form>
                {{-- <a href="{{ action('PrintController@print_data', $sss_contri) }}">Print</button> --}}
                </div>
            </div>
        </div>


        </div>
    </div>



@endsection

@push('scripts')
<script>

$(document).ready(function() {
        $("#sss_download").append(
            $('<tfoot/>').append( $("#sss_download thead tr").clone() )
        );
        var sss_download = $('#sss_download').DataTable({

            footerCallback : function ( row, data, start, end, display ) {
                var api = this.api(), data;

                // converting to interger to find total
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };

                var empl_sss = api
                        .column( 4 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                var sss_offc = api
                        .column( 5 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                var ecc_offc = api
                        .column( 6 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                var total___ = api
                        .column( 7 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                // Update footer by showing the total with the reference of the column index
                $( api.column( 0 ).footer() ).html('');
                $( api.column( 1 ).footer() ).html('');
                $( api.column( 2 ).footer() ).html('');
                $( api.column( 3 ).footer() ).html('Total');
                $( api.column( 4 ).footer() ).html(empl_sss.toFixed(2));
                $( api.column( 5 ).footer() ).html(sss_offc.toFixed(2));
                $( api.column( 6 ).footer() ).html(ecc_offc.toFixed(2));
                $( api.column( 7 ).footer() ).html(total___.toFixed(2));
        },
        orderCellsTop:  true,
        fixedHeader:    true,
        select:         true,
        deferRender:    true,
        order: [ 1, 'asc' ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],


        // scrollY:        200,
        // scrollX:        true,
        // scrollCollapse: true,
        // scroller:       true,
    });

});

</script>
@endpush()
