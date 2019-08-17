@extends('dashboard')

@section('sidebar')

<div class="row">

        <div class="col-md-12">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Send Email</h6>
                </div>
    <div class="card-body">


    <form method="post" action="/sendemail/send">

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

        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="form-row">
            <label for="">Enter Your Subject</label>
            <input type="text" name="subject" id="" class="form-control" />
        </div>
        <div class="form-row">
            <label for="">Enter Your Name</label>
            <input type="text" name="name" id="" class="form-control" />
        </div>

        <div class="form-row">
            <label for="">Enter You Email</label>
            <input type="text" name="email" class="form-control" />
        </div>

        <div class="form-row">
            <label for="">Enter Your Message</label>
            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-row">
            <input type="submit" name="send" value="Send" class="btn btn-info" />
        </div>
    </form>
    </div>
        </div>
    </div>

@endsection
