<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $administrator = DB::table('administrators')->get();
        $administrator = \App\Models\Administrator::where('nama','like','%'. $request->search . '%')->get();
        return view('adminPage.adminPage', ['administrator' => $administrator, 'search' => $request->search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.createAdminPage');
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
            'role' => 'required',
        ]);

        Administrator::create($request->all());

        return redirect('/administrators')->with('status', 'Data administrator berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Administrator $administrator)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrator $administrator)
    {
        //
        return view('adminPage.editAdminPage',compact('administrator'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrator $administrator)
    {
        //
        $request -> validate([
            'nama' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        Administrator::where('id', $administrator->id)
                    ->update([
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'nomorhp' => $request->nomorhp,
                        'email' => $request->email,
                        'role' => $request->role
                    ]);
        return redirect('/administrators')->with('status', 'Data administrator berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrator $administrator)
    {
        //
        Administrator::destroy($administrator->id);
        return redirect('/administrators')->with('status', 'Data administrator berhasil dihapus');
    }
}
