<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(){
        return view('SOHO.Main.login');
    }

    public function login(Request $request){
        $validation = $request -> validate([
            'userId' => 'required',
            'password' => 'required',
        ]);

        $remember = $request -> input('remember');

        if(Auth::attempt($validation, $remember)){
            return redirect()->route('main');
        } 
        else{
            return redirect() -> back() -> with('status', '로그인 정보가 옳지 않습니다.');
        }
    }

    public function logout(){
        Auth::logout();
        
        return redirect()->route('main');
    }
}