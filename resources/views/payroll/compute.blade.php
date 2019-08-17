@extends('dashboard')



@section('sidebar')

<div class="row">

    <div class="col-md-12">

        <form method="POST" action="/payroll">
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
                            <input type="text" class="form-control" name="mrate___"></input>
                        </div>

                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            {{-- <input class="btn btn-primary" type="button" value="Input"> --}}
                    </div>
                </div>

            </div>

        </form>








    </div>
</div>



@endsection
