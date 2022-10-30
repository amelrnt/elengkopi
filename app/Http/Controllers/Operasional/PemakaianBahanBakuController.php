<?php

namespace App\Http\Controllers\Operasional;

use App\Http\Controllers\Controller;
use App\Models\BahanBaku;
use App\Models\PemakaianBahanBaku;
use Illuminate\Http\Request;

class PemakaianBahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['pemakaianbahanbaku'] = PemakaianBahanBaku::all();
        return view('operasional.pemakaian.pemakaian',$data);
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
        return view('operasional.pemakaian.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'bahanbaku'=>'required',
            'jumlah'=>'required',
            'satuan'=>'required',
        ]);
        $pemakaianbahanbaku = new PemakaianBahanBaku();
        $pemakaianbahanbaku->idbahanbaku = $request->bahanbaku;
        $pemakaianbahanbaku->jumlah = $request->jumlah;
        $pemakaianbahanbaku->satuan = $request->satuan;

        try {
            $pemakaianbahanbaku->save();
            return redirect()->route('pemakaianbahanbaku.index')->with('success','Data Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('pemakaianbahanbaku.index')->withErrors(['error'=>'Data Gagal Ditambahkan']);
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
