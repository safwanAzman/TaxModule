<?php

namespace App\Http\Controllers\kutipan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use PDF;

class SenaraiKutipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kutipan.senarai-kutipan');
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

    public function senaraiResit(){
        return view ('pages.kutipan.senarai-resit');
    }

    public function resitPDF($id){
        $invoice = Invoice::find($id);
        $pdf = PDF::loadView('pages.kutipan.resit-PDF', compact('invoice'))->setPaper('A4','portrait');
        return $pdf->stream();
        // return view ('pages.kutipan.resit-PDF', compact('invoice'));
    }

    // public function senaraiTransaksiPDF($duration){
    //     $invoice = Invoice::find($id);
    //     $pdf = PDF::loadView('pages.kutipan.senaraiTransaksiPDF', compact('invoice'))->setPaper('A4','portrait');
    //     return $pdf->stream();
    //     // return view ('pages.kutipan.resit-PDF', compact('invoice'));
    // }

}
