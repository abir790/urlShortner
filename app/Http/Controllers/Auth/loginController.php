<?php

namespace App\Http\Controllers\Auth;
//use Illuminate\session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class loginController extends Controller
{
    public function login(Request $request){
        //return "check";
        $data= $request->only('email','password');
        if(Auth::attempt($data)){
            //session::flash('login',"LogIn Successfully Done");
            return redirect()->intended('short');
            //dd($data);
        }else{
            return redirect()->route('login');
        }

    }

       public function logout(){
       Auth::logout();
       return redirect()->intended('login');
   }
    
}
