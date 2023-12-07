<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    
    public function create()
    {
        return view('showroom/create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'warna' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
        ]);

        $showroom = new \App\Models\Showroom;
        $showroom->nama_mobil = $request->get('name');
        $showroom->brand_mobil = $request->get('brand');
        $showroom->warna_mobil = $request->get('warna');
        $showroom->tipe_mobil = $request->get('tipe');
        $showroom->harga_mobil = $request->get('harga');
        $showroom->save();

        return redirect()->route('showroom/index');
    }

    public function index()
    {

        $showroom = \App\Models\Showroom::all();

        return view('showroom/index', compact('showroom'));
    }

}
