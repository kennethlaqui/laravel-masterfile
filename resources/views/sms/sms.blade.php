@extends('dashboard')

@section('sidebar')

<div class="row">

        <div class="col-md-12">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Send SMS</h6>
                </div>
    <div class="card-body">


    <form method="post" action="/sms">

        @csrf

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        .@endif

        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4 style="   ">{{Session('success')}}</h4>
            </div>
        @endif
        {{-- // if($message = Session::get('success'))
        // <div class="alert alert-success alert-block">
        //     <button type="button" class="close" data-dismiss="alert">x</button>
        //     <strong> $message }}</strong>
        // </div>
        // endif --}}
        <div class="form-row">
            <label for="">To</label>
            <input type="text" name="sms_to" id="" class="form-control" />
        </div>
        <div class="form-row">
            <label for="">Enter Your Message</label>
            <textarea name="sms_message" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-row">
            <input type="submit" name="send" value="Send" class="btn btn-info" />
        </div>
    </form>
    </div>
        </div>
    </div>

@endsection
