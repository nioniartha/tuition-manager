<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Officers;

class OfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officers_nioni = Officers::all();

        return view ('officers.officers')->with('officers_nioni',$officers_nioni);
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
            'username' => 'required|min:5',
            'officerName' => 'required|min:3',
            'role' => 'required',
        ]);
            
        
        // insert
        $officer_nioni = new Officers;
        $officer_nioni->username = $request->username;
        $officer_nioni->nama_petugas = $request->officerName;
        $officer_nioni->level =  $request->role;
        $officer_nioni->password = bcrypt('password');
        $officer_nioni->save();

        return redirect('/module/officers')->with('success', 'New officers have been added successfully');

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
        $officers_nioni = Officers::find($id);
        return view('officers.officers_edit',['officer_nioni' => $officers_nioni]);
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
            'username' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required',
        ]);

        $officers_nioni = Officers::find($id);
        $officers_nioni->update($request->all());

        return redirect('/module/officers')->with('success', 'Officer updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $officers_nioni = Officers::find($id);
        $officers_nioni->delete();
        return redirect('/module/officers')->with('success', 'Officer Deleted');
    }

}
