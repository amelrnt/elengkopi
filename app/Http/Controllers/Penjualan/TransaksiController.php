<?php

namespace App\Http\Controllers\Penjualan;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['transaksi'] = Transaksi::all();
        //dd($data);
        return view('penjualan.transaksi.transaksi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['menu'] = Menu::all();
        return view('penjualan.transaksi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detailtransaksidecode = json_decode($request->detailtransaksi);
        $qty = json_decode($request->qty);
        $transaksi = new Transaksi;
        // $transaksi->idmenu = $request->menu;
        // $transaksi->jumlah = $request->jumlah;
        $transaksi->totalharga = $request->total;

        // $transaksi->save();
        // if($transaksi->save()){
        //     echo("berhasil");}
        try {
            if ($transaksi->save()) {
                foreach ($detailtransaksidecode as $key => $value) {
                    $detailtransaksi = new DetailTransaksi;
                    $detailtransaksi->idtransaksi = $transaksi->id;
                    $detailtransaksi->idmenu = $value;
                    $jumlah = intval($qty[$key]);
                    $detailtransaksi->jumlah = $jumlah;
                    if ($detailtransaksi->save()) {
                        var_dump($detailtransaksi);
                    };
                    var_dump($value . " " . $qty[$key]);
                    echo '<br>';
                    var_dump(gettype($jumlah). " " . $qty["1"]);
                }
            }
            return redirect()->route('transaksi.index')->with('success','Data Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('transaksi.index')->withErrors(['error'=>'Data Gagal Ditambahkan']);
            echo ($th);
        }
        // $request->validate([
        // 'menu' => 'required',
        // 'jumlah' => 'required',
        // 'harga' => 'required',
        // ]);


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
