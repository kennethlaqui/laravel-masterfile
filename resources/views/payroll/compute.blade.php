@extends('dashboard')

{{-- <meta name="_token" content="{{csrf_token()}}" /> --}}

@section('sidebar')

<div class="row">

    <div class="col-md-12">

        <form method="POST" action="/payroll/post">
            {{-- <form id="form"> --}}
            @method('POST')

            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Compute</h6>
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="drate___">Daily Rate</label>
                            <input type="text" class="form-control" name="drate___"></input>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label" for="day_type">Rate Type</label>
                            @php
                                $result = c_pm_generic::gf_get_l_day_type()
                            @endphp
                            <select name="day_type" id="day_type" class="form-control">
                                @foreach ($result as $day_type)
                            <option value="{{ $day_type->cntrl_no }}">{{ $day_type->descript }} - {{ c_pm_generic::gf_convert_dec_perc($day_type->reg_rate) }}%</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="mrate___">Monthly Rate</label>
                            <input type="text" class="form-control" id="mrate___" name="mrate___"></input>
                        </div>

                        <div class="from-group col-md-3">
                            <label for="result">Result</label>
                            <input type="text" class="form-control" id="res_mrate___" name="res_mrate___"></input>
                            <h1 id ="rate"></h1>
                        </div>

                    </div>
                    <div class="form-group">
                            <button id="ajaxSubmit" type="submit" class="btn btn-primary">Submit</button>
                            {{-- <button class="btn btn-primary">Submit</button> --}}
                            {{-- <input class="btn btn-primary" type="button" value="Input"> --}}
                    </div>
                </div>

            </div>

        </form>
        {{-- <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

        <script>
        // jQuery, bind an event handler or use some other way to trigger ajax call.
        $('form').submit(function( event ) {
            event.preventDefault();
            $.ajax({
                url: "{{ url('/payroll/post') }}",
                type: 'post',
                method: 'post',
                data: $('form').serialize(), // Remember that you need to have your csrf token include
                dataType: 'json',
                success: function( response ){
                    console.log(response);
                    var x = response;
                    console.log(x);
                    // document.getElementById("rate").innerHTML ;
                    // $('#res_mrate___').html(response);

                },
                error: function( response ){
                    // Handle error
                }
            });
        }); --}}


        {{-- </script> --}}











    </div>
</div>



@endsection
