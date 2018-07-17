<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;
use PDF;

class DaftarDirekomendasikanController extends Controller
{
    // public function index () {
    //     return view ('/sipp/administrasi/daftar_direkomendasikan');
    // }

    public function printPreview() {
        $Bio = Biodata::all();
        return view ('printPreview', compact('Bio'));
    }

    public function pdfKeluar () {
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
        
        $bio = Biodata::all();
        // $detail = DetailKeluar::all();
        // $pdf = PDF::loadView('sipp.administrasi.lembar_permohonan_cetak', ['keluar'=>$bio])->setPaper('a4', 'portait');
        // $pdf = PDF::loadHtml('sipp.administrasi.lembar_permohonan_cetak', ['keluar'=>$bio])->setPaper('a4', 'portait');
        // return $pdf->stream();

        // $pdf = PDF::loadView('sipp.administrasi.lembar_permohonan_cetak', $bio);
        $pdf = PDF::loadHTML('<h1>Test</h1>');
        return $pdf->printPreview();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = Biodata::orderBy('id')->get();
        return view('sipp.administrasi.daftar_direkomendasikan', compact('halo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sipp.administrasi.daftar_direkomendasikan');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $halo = Biodata::where('id_pengajuan', $id)->get();

        return view('sipp.administrasi.daftar_direkomendasikan', compact('halo'));
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
    }
}
