<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

        <table id="sss_download" class="table table-striped table-bordered dt-body-nowrap"  style="width:100%" >
                <thead>
                    <tr>
                        <th class="text-center" scope="col" id="user_id">SSS #</th>
                        {{-- <th class="text-center" scope="col">Family Name</th>
                        <th class="text-center" scope="col">First Name</th>
                        <th class="text-center" scope="col">Middle Name</th>
                        <th class="text-center" scope="col">Employee</th>
                        <th class="text-center" scope="col">Employer</th>
                        <th class="text-center" scope="col">ECC</th>
                        <th class="text-center" scope="col">Total</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($sss_contri as $row)

                        {{-- @if($row->chge_sss_flag == 'F') --}}
                            {{-- {{dd($sss_contri)}} --}}
                            <tr class="clickable-row">
                                <td class="text-center"  scope="row">{{ $row->sss_numb }}</td>
                                {{-- <td class="text-center"  scope="row">{{ $row->last_nme }}</td>
                                <td class="text-center"  scope="row">{{ $row->frst_nme }}</td>
                                <td class="text-center"  scope="row">{{ $row->midl_nme }}</td>
                                <td class="text-center"  scope="row">{{ $row->sss_empl }}</td>
                                <td class="text-center"  scope="row">{{ number_format($row->sss_offc,2) }}</td>
                                <td class="text-center"  scope="row">{{ $row->ecc_offc }}</td>
                                <td class="text-center"  scope="row">{{ number_format($row->total,2) }}</td> --}}
                            </tr>

                        {{-- @else --}}

                            {{-- <tr class="clickable-row">
                                <td class="text-center"  scope="row">{{ $row->sss_numb }}</td>
                                <td class="text-center"  scope="row">{{ $row->chge_last_nme.$row->chge_extn_nme}}</td>
                                <td class="text-center"  scope="row">{{ $row->chge_frst_nme }}</td>
                                <td class="text-center"  scope="row">{{ $row->chge_midl_ini }}</td>
                                <td class="text-center"  scope="row">{{ $row->sss_empl }}</td>
                                <td class="text-center"  scope="row">{{ number_format($row->sss_offc,2) }}</td>
                                <td class="text-center"  scope="row">{{ $row->ecc_offc }}</td>
                                <td class="text-center"  scope="row">{{ number_format($row->total,2) }}</td>
                            </tr>

                        @endif --}}
                    @endforeach
                </tbody>
            </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

