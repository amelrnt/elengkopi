<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = Menu::all();

        return view('owner.menu.menu',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('owner.menu.create');
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
            'harga' => 'required',
        ]);

        $menu = new Menu();
        $menu->nama = $request->nama;
        $menu->harga = $request->harga;
        if ($menu->save()) {
            return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan');
        } else {
            return redirect()->route('menu.index')->with('error', 'Menu gagal ditambahkan');
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
        $data['menu'] = Menu::find($id);
        return view('owner.menu.edit', $data);
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
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $menu = Menu::find($id);
        $menu->nama = $request->nama;
        $menu->harga = $request->harga;
        if ($menu->save()) {
            return redirect()->route('menu.index')->with('success', 'Menu berhasil diubah');
        } else {
            return redirect()->route('menu.index')->with('error', 'Menu gagal diubah');
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
        $menu = Menu::find($id);
        // $menu->delete();
        if ($menu->delete()) {
            return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
        } else {
            return redirect()->route('menu.index')->with('error', 'Menu gagal dihapus');
        }
    }
}
