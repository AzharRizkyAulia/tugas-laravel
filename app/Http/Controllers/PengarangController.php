<?php

namespace App\Http\Controllers;

use App\Models\pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengarang = Pengarang::all();
        return view('pengarang.index', compact('pengarang'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengarang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengarang = new pengarang();
        $pengarang->nama_pengarang = $request->nama;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->telepon;
        $pengarang->save();
        return redirect()->route('pengarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengarang = pengarang::findOrFail($id);
        return view('pengarang.show', compact('pengarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengarang = pengarang::findOrFail($id);
        return view('pengarang.edit', compact('pengarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengarang = pengarang::findOrFail($id);
        $pengarang->nama_pengarang = $request->nama;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->telepon;
        $pengarang->save();
        return redirect()->route('pengarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengarang::findOrFail($id)->delete();
        return redirect()->route('pengarang.index');
    }
}
