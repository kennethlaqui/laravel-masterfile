<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use LaravelMsg91;

class SmsController extends Controller
{
    function index()
    {

        return view('sms.sms');

    }

    function send(Request $request)
    {
        $x = $request->get('sms_to');
        $x = ltrim($x, '0');
        $sms_to = '63'.$x;
        Nexmo::message()->send([
            'to'   => $sms_to,
            'from' => '09453821547',
            'text' => $request->get('sms_message')
        ]);

        Session::flash('success', 'SMS Sent');
        return back();

    }

    function Msg91()
    {

        $result = LaravelMsg91::message(639453821547, 'This is test message');
        dd($result);
    }


}
