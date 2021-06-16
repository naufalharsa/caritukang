<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use DB;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $customer = \App\Models\Customer::where('nama','like','%'. $request->search . '%')->get();
        return view('customerPage.customerPage',['customer' => $customer, 'search' => $request->search]);
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
            'alamat' => 'required',
            'nomorhp' => 'required',
        ]);

        Customer::create($request->all());

        return redirect('/')->with('status', 'Data customer berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customerPage.editCustomerPage',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request -> validate([
            'nama' => 'required',
            'email' => 'required',
        ]);

        Customer::where('id', $customer->id)
                    ->update([
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'nomorhp' => $request->nomorhp,
                        'email' => $request->email
                    ]);
        return redirect('/customers')->with('status', 'Data Customer berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);
        return redirect('/customers')->with('status', 'Data customer berhasil dihapus');
    }


}
