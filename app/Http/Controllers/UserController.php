<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'age' => 'required',
            'role' => 'required',
        ]);
      
        $user = User::create($data);
       // dd($data);
            if($user){
                return redirect()->route('login');
            }
            return redirect()->route('register');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials,)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function dashboardPage(){
       // if(Auth::check()){
            return view('dashboard'); // Ensure 'dashboard' view exists
       // }
        //return redirect()->route('login');
    }

    public function innerPage(Request $request){
        if(Auth::check()){
            return view('inner'); // Ensure 'dashboard' view exists
        }
        return redirect()->route('login');
    }
    public function logout(Request $request){
       Auth::logout();
        return view('login');
    }

    
}
