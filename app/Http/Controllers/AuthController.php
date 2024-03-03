<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function actionlogin(Request $request){

        $data = [
            'name' => $request->input('name'),
            'password' => $request->input('password'),
        ];
        
        if (Auth::attempt($data)) {
            if (auth()->user()->role_id == 1) {
                return redirect()->route('dashboard');
            }
            else if (auth()->user()->role_id == 2) {
                return redirect()->route('dashboard');
            }
            else if (auth()->user()->role_id == 3) {
                return redirect()->route('dashboard');
            }
        }
        else {
            return redirect('/login');
        }
    }

    public function actionlogout() {
        Auth::logout();
        return redirect('/login');
    }
}
