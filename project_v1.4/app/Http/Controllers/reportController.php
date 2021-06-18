<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class reportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $report = \App\Models\Report::all();
        return view('/reportPage.reportPage',['report' => $report]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reportPage.createReportPage');

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
            'judul_laporan' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        Report::create($request->all());

        return redirect('/reports')->with('status', 'Data laporan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('reportPage.editReportPage',compact('report'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $request -> validate([
            'judul_laporan' => 'required',
            'description' => 'required',
        ]);

        Report::where('id', $report->id)
                    ->update([
                        'judul_laporan' => $request->judul_laporan,
                        'category' => $request->category,
                        'description' => $request->description,
                        'date' => $request->date,
                        
                    ]);
        return redirect('/reports')->with('status', 'Data laporan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        Report::destroy($report->id);
        return redirect('/reports')->with('status', 'Data laporan berhasil dihapus');
    }
}
