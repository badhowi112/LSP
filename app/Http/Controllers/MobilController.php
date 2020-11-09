<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = mobil::all();        
        return view('mobil.index',compact('data'));
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
        $this->validate($request,[
            'kode_mobil' => 'required|numeric|unique:tbl_master_mobil,kode_mobil',
            'no_pol' => 'required|unique:tbl_master_mobil,no_pol'
        ],[
            'kode_mobil.unique' => 'Kode Mobil Sudah Ada Di DATABASE Mohon DiCek Kembali',
            'no_pol.unique' => 'No Polisi Sudah Ada Di DATABASE Mohon DiCek Kembali'
        ]);
        mobil::create($request->all());
        return redirect('/');
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
        $data = mobil::find($id);
        return view('mobil.edit',compact('data'));
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
        $data = mobil::find($id);
        $data->update($request->all());
        return redirect('/');
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
        $datas = mobil::find($id);
        $datas->delete($datas);
        return redirect('/');
    }
}
