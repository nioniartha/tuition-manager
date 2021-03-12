<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vocational;

class VocationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vocationals_nioni = Vocational::all();

        return view ('vocational.vocational')->with('vocationals_nioni',$vocationals_nioni);
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
        $this->validate($request,[
            'jurusan' => 'required|unique:jurusan_nioni'
        ]);
            
        
        // insert
        $vocational_nioni = new Vocational;
        $vocational_nioni->jurusan = $request->jurusan;
        $vocational_nioni->save();

        return redirect('/module/vocational')->with('success', 'New vocationals have been added successfully');
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
        $vocational_nioni = Vocational::find($id);
        return view('vocational.vocational_edit',['vocational_nioni' => $vocational_nioni]);
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
        $this->validate($request,[
            'jurusan' => 'required',
        ]);

        $vocational_nioni = Vocational::find($id);
        $vocational_nioni->update($request->all());

        return redirect('/module/vocational')->with('success', 'Vocational updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vocational_nioni = Vocational::find($id);
        $vocational_nioni->delete();
        return redirect('/module/vocational')->with('success', 'Vocational Deleted');
    }
}
