<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cek(Request $request)
    {
        if(Auth::check()){
            if (Auth::user()->role==3) {
                return view('owner.index');
            }
            dd(Auth::user()->role);
        }
        dd(Auth::check());
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function profile()
    {
        if (Auth::user()->role==1) {
            $data['user'] = User::find(Auth::user()->id);
            return view('operasional.profile',$data);
        }
        if (Auth::user()->role==2) {
            $data['user'] = User::find(Auth::user()->id);
            return view('penjualan.profile',$data);
        }
        if (Auth::user()->role==3) {
            $data['user'] = User::find(Auth::user()->id);
            return view('owner.profile',$data);
        }

    }
    public function updateprofile(Request $request)
    {
        $user= User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password!=null) {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        if ($user->save()) {

            // return redirect()->route(['success'=> 'Profile berhasil diubah']);
            return redirect('/')->with('success', 'Profile berhasil diedit');
        } else {
            return redirect()->back()->withErrors(['error'=> 'Gagal update profile']);
            // return redirect()->back()->with('error', 'User gagal diedit');
        }
    }
}
