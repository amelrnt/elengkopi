<?php

namespace App\Http\Controllers\Penjualan;

use App\Http\Controllers\Controller;
use App\Models\PembelianBahanBaku;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user'] = User::all()->count();
        $data['pembelian'] = PembelianBahanBaku::all()->sum('harga');
        return view('penjualan.dashboard', $data);
    }
}
