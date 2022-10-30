<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\PembelianBahanBaku;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function pembelianbahanbaku()
    {
        $data['pembelian'] = PembelianBahanBaku::all();
        return view('owner.report.pembelianbahanbaku',$data);
    }
    public function transaksi()
    {
        $data['transaksi'] = DetailTransaksi::all();
        // dd($data);
        return view('owner.report.transaksi',$data);

    }
}
