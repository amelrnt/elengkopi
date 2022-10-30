<?php

namespace App\Http\Controllers\Operasional;

use App\Http\Controllers\Controller;
use App\Models\BahanBaku;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['bahanbaku'] = BahanBaku::all();
        return view('operasional.bahanbaku.bahanbaku',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('operasional.bahanbaku.create');
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
            'nama' => 'required',
            'biayapenyimpanan' => 'required',

        ]);
        $bahanbaku = new BahanBaku();
        $bahanbaku->nama = $request->nama;
        $bahanbaku->biayapenyimpanan = $request->biayapenyimpanan;
        if ($bahanbaku->save()) {
            return redirect()->route('bahanbaku.index')->with('success', 'Bahan Baku berhasil ditambahkan');
        } else {
            return redirect()->route('bahanbaku.index')->with(['error'=> 'Bahan Baku gagal ditambahkan']);
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
        $data['bahanbaku'] = BahanBaku::find($id);
        return view('operasional.bahanbaku.edit',$data);
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
        $request->validate([
            'nama'=>'required',
            'biayapenyimpanan'=>'required',
        ]);
        $bahanbaku = BahanBaku::find($id);
        $bahanbaku->nama = $request->nama;
        $bahanbaku->biayapenyimpanan = $request->biayapenyimpanan;

        try {
            $bahanbaku->save();
            return redirect()->route('bahanbaku.index')->with('success', 'Bahan Baku berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->route('bahanbaku.index')->withErrors(['error'=> 'Bahan Baku gagal diubah']);
        }


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
        $bahanbaku = BahanBaku::find($id);
        if ($bahanbaku->delete()) {
            return redirect()->route('bahanbaku.index')->with('success', 'Bahan Baku berhasil dihapus');
        } else {
            return redirect()->route('bahanbaku.index')->with('error', 'Bahan Baku gagal dihapus');
        }

    }
}
