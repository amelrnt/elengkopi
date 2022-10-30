<?php

namespace App\Http\Controllers\Operasional;

use App\Http\Controllers\Controller;
use App\Models\BahanBaku;
use App\Models\Menu;
use App\Models\PembelianBahanBaku;
use Illuminate\Http\Request;

class PembelianBahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pembelianbahanbaku'] = PembelianBahanBaku::all();
        // dd($data);

        return view('operasional.pembelian.pembelian',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['menu'] = BahanBaku::all();
        return view('operasional.pembelian.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'bahanbaku' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'harga' =>'required',
            'biayapengiriman' => 'required',
            'biayapemesanan' => 'required',
        ]);

        $pembelianbahanbaku = new PembelianBahanBaku();
        $pembelianbahanbaku->idbahanbaku = $request->bahanbaku;
        $pembelianbahanbaku->jumlah = $request->jumlah;
        $pembelianbahanbaku->satuan = $request->satuan;
        $pembelianbahanbaku->harga = $request->harga;
        $pembelianbahanbaku->biayapengiriman = $request->biayapengiriman;
        $pembelianbahanbaku->biayapemesanan = $request->biayapemesanan;

        try {
            $pembelianbahanbaku->save();
            return redirect()->route('pembelianbahanbaku.index')->with('success', 'Pembelian Bahan Baku berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('pembelianbahanbaku.index')->withErrors(['error'=>'Data Gagal Ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
