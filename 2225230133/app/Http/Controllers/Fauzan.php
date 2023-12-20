<?php

namespace App\Http\Controllers;

use App\Models\mijeng;
use Illuminate\Http\Request;

class Fauzan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mijeng::all();
       return view('member',compact('data'));
    }

    public function tambah()
    {
       return view('tambahdata');
    }

    public function insert(Request $request)
    {

    $request->validate(
    [
        'Nama' => 'required|min:1',
        'NIM' => 'required',
        'Email' => 'required',
        'Jabatan' => 'required'
    ],
    [
        'Nama.required' => 'Nama Tidak Boleh Kosong',
        'NIM.required' => 'NIM Tidak Boleh Kosong',
        'Email.required' => 'Email Tidak Boleh Kosong',
        'Jabatan.required' => 'Jabatan Tidak Boleh Kosong',
    ]
);
        mijeng::create($request->all());
        return redirect()->route('member')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id)
    {
        $data = mijeng::find($id);
        return view('tampildata', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate(
    [
            'Nama' => 'required|min:1',
            'NIM' => 'required',
            'Email' => 'required',
            'Jabatan' => 'required',
    ],
    [
        'Nama.required' => 'Nama Tidak Boleh Kosong',
        'NIM.required' => 'NIM Tidak Boleh Kosong',
        'Email.required' => 'Email Tidak Boleh Kosong',
        'Jabatan.required' => 'Jabatan Tidak Boleh Kosong',
    ]
);
        $data = mijeng::find($id);
        $data->update($request->all());
        return redirect()->route('member')->with('success','Data Berhasil Di Update');
    }

    public function delete($id)
    {
        $data = mijeng::find($id);
        $data->delete();
        return redirect()->route('member')->with('success','Data Berhasil Di Hapus');

    }
}
