<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = User::all();
        return view('owner.user.user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('owner.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        if ($user->save()) {
            return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'User gagal ditambahkan');
        }

        // User::create($request->all());
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
        $data['user'] = User::find($id);
        return view('owner.user.edit', $data);
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
        $auth = Auth::user();
        // dd($auth->email);
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'password' => ['min:8'],
            'password_confirmation' => ['min:8','same:password'],
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        if ($user->save()) {
            return redirect()->route('user.index')->with('success', 'User berhasil diedit');
        } else {
            return redirect()->back()->with('error', 'User gagal diedit');
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
        if (Auth::user()->id == $id) {
            return redirect()->back()->withErrors(['error' => 'Tidak dapat menghapus diri sendiri']);
        }
        $user = User::find($id);
        if ($user->delete()) {
            return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'User gagal diedit');
        }

    }
}
