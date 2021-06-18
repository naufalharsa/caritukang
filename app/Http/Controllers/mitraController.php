<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class mitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $mitra = \App\Models\Mitra::where('nama','like','%'.$request->search . '%')->get();
        return view('mitraPage.mitraPage', ['mitra' => $mitra,'search' => $request->search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama' => 'required',
            'email' => 'required',
        ]);

        Mitra::create($request->all());

        return redirect('/')->with('status', 'Data mitra berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        return view('mitraPage.editMitraPage',compact('mitra'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        $request -> validate([
            'nama' => 'required',
            'category' => 'required',
            'email' => 'required',
        ]);

        Mitra::where('id', $mitra->id)
                    ->update([
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'nomorhp' => $request->nomorhp,
                        'category' => $request->category,
                        'email' => $request->email
                    ]);
        return redirect('/mitras')->with('status', 'Data Mitra berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        Mitra::destroy($mitra->id);
        return redirect('/')->with('status', 'Data mitra berhasil dihapus');
    }
}
