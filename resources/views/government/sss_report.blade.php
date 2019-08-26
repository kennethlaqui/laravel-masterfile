@extends('dashboard')

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
                            <th class="text-center" scope="col" id="user_id">Employee Code</th>
                            <th class="text-center" scope="col">Payroll Directory</th>
                            <th class="text-center" scope="col">SSS Employee</th>
                        </tr>
                    </thead>
                    <tbody>
                            {{-- dw_wf.object.empl_cde[ll_row2] = ls_sss_hist_empl_cde
                            dw_wf.object.dte_hire[ll_row2] = ld_dte_hire
                            dw_wf.object.dte_rsgn[ll_row2] = ld_dte_rsgn

                            dw_wf.object.sss_numb[ll_row2] = ls_sss_numb
                            dw_wf.object.gross___[ll_row2] = 0
                            dw_wf.object.base_sss[ll_row2] = 0
                            dw_wf.object.sss_empl[ll_row2] = 0
                            dw_wf.object.sss_offc[ll_row2] = 0
                            dw_wf.object.ecc_offc[ll_row2] = 0
                            dw_wf.object.dwld_rmk[ll_row2] = lc_sss_hist_dwld_rmk
                            dw_wf.object.tran_dte[ll_row2] = ld_sss_hist_tran_dte
                            dw_wf.object.pos_code[ll_row2] = ll_sss_hist_pos_code --}}
                        @foreach ($sss_contri as $row)
                        <tr class="clickable-row">
                            <td class="text-center"  scope="row">{{ empl_cde }}</td>
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
