<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

use Auth;
use Redirect;
use App\User;
use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\myMail;
use Illuminate\Support\Carbon;

class LoginController extends Controller
{
    
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $username  = 'username ';
    protected $redirectTo = '/dashboard';
    protected $guard  = 'web';


    public function getLogin()
    {
        if(Auth::guard('web')->check()){

            return redirect()->route('dashboard');
        }
        return view('login');
    }

     public function postLogin(Request $request){
        $auth = Auth::guard('web')->attempt(['name'=>$request['name'],'password'=>$request['password'], 'role_id'=>1]);
        $auth1 = Auth::guard('web')->attempt(['name'=>$request['name'],'password'=>$request['password'], 'role_id'=>2,'active'=>1]);
        $auth2 = Auth::guard('web')->attempt(['name'=>$request['name'],'password'=>$request['password'], 'role_id'=>2,'active'=>0]);
        if($auth){
            
            return redirect()->route('dashboard');
        }
        
        if($auth1)
        {
                $user = Auth::user();
                $user1 = User::where('id', 1)->first();
                $myMail = new myMail
                (
                    'SIGNED IN',
                    $user->name,
                    "You have successfully loggedd in, if you believe you did not initiate this 
                     process, kindly contact us to change your password. "
                );
             $message= $user->name.' logged in today @ exactly '.Carbon::now()->toTimeString();
            try{
                 //Mail::to($user->email)->send($myMail);

                    $user1->notify(new \App\Notifications\updateAdmin($user, $message));
                
                    return redirect()->route('dashboard1');
                }catch(\Exception $e){
                    
                    $user1->notify(new \App\Notifications\updateAdmin($user, $message));
                    
                return redirect()->route('dashboard1');
                }
            
        }
        if($auth2)
        {
            session()->flash('msg', 'Account has been suspended.
                To reinstate your CoinFinancePro Account functionality and access your content, please contact the 
                Admin for more assistance via support@CoinFinancePro.com.');
             return redirect()->back();
        }

        session()->flash('msg', 'Incorrect Email or Password');
        return redirect()->back();
    }

     public function getLogout(Request $request){
                
        Auth::logout();
      
        return redirect()->route('/');

    }
}
