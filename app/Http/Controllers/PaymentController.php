<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment.payment');
    }

    public function loadData(Request $request)
    {
    	if ($request->has('q')) {
    		$cari = $request->q;
    		$data = DB::table('siswa_nioni')->select('id_siswa', 'nisn', 'nama')
                            ->where("nisn","LIKE",'%'.$request->cari.'%')
                            ->orWhere("nama","LIKE",'%'.$request->cari.'%')
                            ->get();
    		return response()->json($data);
    	}
    }

    public function search(Request $request) {

        $student_nioni = Students::with('kelas.vocational')
                            ->with('tuition')
                            ->where('id_siswa', $request->data)
                            ->get();


        // return view ('payment.payment')
        //         ->with('student_nioni',$student_nioni);

        return response()->json($student_nioni);
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
}
