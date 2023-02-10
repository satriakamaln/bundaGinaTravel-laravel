<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $data = Travel::all();

        return view('admin.travel.index', compact('data'));
    }

    public function create(Request $request)
    {
        $data = new Travel;
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;
        $data->save();

        return back();
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy(Travel $id)
    {
        $id->delete();

        return back()->withSuccess('Data Berhasil Dihapus');
    }
}
