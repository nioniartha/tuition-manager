<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuition;

class TuitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuition_nioni = Tuition::all();

        return view ('tuition.tuition')->with('tuitions_nioni',$tuition_nioni);
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
        $angka_nominal_nioni = str_replace(".", "", $request->nominal);
    
        $this->validate($request,[
            'tahun' => 'required|unique:spp_nioni',
            'nominal' => 'required'
        ]);

        $tuition_nioni = new Tuition;
        $tuition_nioni->tahun = $request->tahun;
        $tuition_nioni->nominal = $angka_nominal_nioni;
        $tuition_nioni->save();

        return redirect('/module/tuition')->with('success', 'New Tuition have been added successfully');
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
        $tuition_nioni = Tuition::find($id);
        return view ('tuition.tuition_edit')->with('tuitions_nioni',$tuition_nioni);
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
            'tahun' => 'required',
            'nominal' => 'required'
        ]);

        $angka_nominal_nioni = str_replace(".", "", $request->nominal);
    
        Tuition::find($id)->update([
            'tahun' => $request->tahun,
            'nominal' => $angka_nominal_nioni
        ]);

        return redirect('/module/tuition')->with('success', 'Tuition updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tuition_nioni = Tuition::find($id);
        $tuition_nioni->delete();
        return redirect('/module/tuition')->with('success', 'Tuition Deleted');
    }
}
