<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            // dd(Auth::user()->role);
            if (Auth::user()->role==1) {
                // return view('owner.profile');
            }
            else if (Auth::user()->role==2) {
                // return view('owner.profile');
            }
            elseif (Auth::user()->role==3) {

                // $data['user'] = User::find(Auth::user()->id);
                return view('owner.dashboard');
            }
            }
        return view('auth.login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect()->intended('operasional');
        }else{
            return redirect()->back()->withErrors(['error'=>'username atau password salah'])->withInput($request->all);
        }
    }

}
