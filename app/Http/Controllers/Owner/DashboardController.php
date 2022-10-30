<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PembelianBahanBaku;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data['user'] = User::all()->count();
        $data['pembelian'] = PembelianBahanBaku::all()->sum('harga');
        return view('owner.user.user',$data);
    }
    public function dashboard()
    {
        $data['user'] = User::all()->count();
        $data['pembelian'] = PembelianBahanBaku::all()->sum('harga');
        return view('owner.dashboard',$data);
    }
}
