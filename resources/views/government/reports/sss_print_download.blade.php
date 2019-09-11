<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">

    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .text-right {
            text-align: right;
        }
    </style>

  </head>
  <body class="login-page" style="background: white">

    <div>
        <div class="row">
            <div class="col-xs-12 text-center text-center" style="background-color:lightcyan" >
                <strong>SSS PREMIUM CONTRIBUTIONS</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                For the month of August 2019
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                Private Employer
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                Name of Employer.: VIRTUAL LOGIC INC. <br>
                SSS Number.......: 04-259-7220-5 <br>
                Address..........: Stockton St. Laguna Bel Air 1 <br>
                                   City of Santa Rosa, Laguna <br>
                Zip Code.........: 4026 <br>
                Telephone Number.: 049 5432083 <br>
            </div>
        </div>
        <table style="width: 100%">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">SSS #</th>
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
    </div>

    {{-- <div class="col-xs-4">

    </div>
    <div style="margin-bottom: 0px">&nbsp;</div> --}}

    {{-- <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

  </body>
</html>

