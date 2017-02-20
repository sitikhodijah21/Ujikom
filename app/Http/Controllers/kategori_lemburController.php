<?php

namespace App\Http\Controllers;

use App\kategori_lemburModel;
use Request;

class kategori_lemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_lembur=kategori_lemburModel::all();
        return view('kategori_lembur.index',compact('kategori_lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_lembur=kategori_lemburModel::all();
        return view('kategori_lembur.create',compact('kategori_lembur'));
    
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
       $kategori_lembur=Request::all();
        kategori_lemburModel::create($kategori_lembur);
        return redirect('kategori_lembur');
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
        $kategori_lembur=kategori_lemburModel::all();
        return view('kategori_lembur.edit',compact('kategori_lembur'));
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
        $Update=Request::all();
        $kategori_lembur=kategori_lemburModel::find($id);
        $kategori_lembur->update($Update);
        return redirect('kategori_lembur');
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
        kategori_lemburModel::find($id)->delete();
        return redirect('kategori_lembur');
    }
}
