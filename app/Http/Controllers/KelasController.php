<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Vocational;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_nioni = Kelas::all();
        $vocational_nioni = Vocational::pluck('jurusan', 'id_jurusan');

        return view ('kelas.kelas')
                ->with('class_nioni',$class_nioni)
                ->with('vocational_nioni', $vocational_nioni);
        // return response()->json(['name' => $vocational_nioni]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'kelas' => 'required',
            'vocational_id_jurusan' => 'required'
        ]);
        // insert
        $class_nioni = new Kelas;
        $class_nioni->kelas = $request->kelas;
        $class_nioni->vocational_id_jurusan = $request->vocational_id_jurusan;
        $class_nioni->save();

        return redirect('/module/class')->with('success', 'New class have been added successfully');
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
        $class_nioni = Kelas::find($id);
        $vocational_nioni = Vocational::pluck('jurusan', 'id_jurusan');

        return view ('kelas.kelas_edit')
                ->with('class_nioni',$class_nioni)
                ->with('vocational_nioni', $vocational_nioni);
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
        Kelas::find($id)->update([
            'kelas' => $request->kelas,
            'vocational_id_jurusan' => $request->vocational_id_jurusan,
        ]);

        return redirect('/module/class')->with('success', 'Class updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class_nioni = Kelas::find($id);
        $class_nioni->delete();
        return redirect('/module/class')->with('success', 'Class Deleted');
    }
}
