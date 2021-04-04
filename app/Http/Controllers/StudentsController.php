<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Kelas;
use App\Tuition;
use App\Payment;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students_nioni = Students::with('kelas')->with('tuition')->get();
        $class_nioni = Kelas::with('vocational')->get();
        $tuition_nioni = Tuition::all();

        // return response()->json(['name' => $class_nioni]);

        return view ('students.students')
                ->with('students_nioni',$students_nioni)
                ->with('class_nioni', $class_nioni)
                ->with('tuition_nioni', $tuition_nioni);
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
            'nisn' => 'required|unique:siswa_nioni',
            'nis' => 'required|unique:siswa_nioni',
            'kelas' => 'required',
            'fullName' => 'required',
            'notelp' => 'required|max:13',
            'address' => 'required',
            'tuition_id_spp' => 'required'
        ]);

        $student_nioni = new Students;
        $student_nioni->nisn = $request->nisn;
        $student_nioni->nis = $request->nis;
        $student_nioni->kelas_id_kelas = $request->kelas;
        $student_nioni->nama = $request->fullName;
        $student_nioni->no_telp = $request->notelp;
        $student_nioni->alamat = $request->address;
        $student_nioni->tuition_id_spp = $request->tuition_id_spp;
        $student_nioni->save();
        
        $payment_nioni = new Payment;
        $payment_nioni->bulan_dibayar = 0;
        $payment_nioni->tgl_bayar = date('Y-m-d H:i:s');
        $payment_nioni->jumlah_bayar = 0;
        $payment_nioni->officers_id_petugas = auth()->user()->id_petugas;
        $payment_nioni->students_id_siswa = $student_nioni->id_siswa;
        $payment_nioni->tuition_id_spp = $request->tuition_id_spp;
        $payment_nioni->tahun_dibayar = $student_nioni->tuition->tahun;
        $payment_nioni->bulan_sudah_bayar =  0;
        $payment_nioni->sisa_bulan_bayar = 12;
        $payment_nioni->save();

        return redirect('/module/students')->with('success', 'New Student have been added successfully');
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
        $students_nioni = Students::find($id);
        $class_nioni = Kelas::with('vocational')->get();
        $tuition_nioni = Tuition::all();

        // dd($students_nioni);

        // return response()->json(['name' => $class_nioni]);

        return view ('students.students_edit')
                ->with('students_nioni',$students_nioni)
                ->with('class_nioni', $class_nioni)
                ->with('tuition_nioni', $tuition_nioni);
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
        // dd($request->kelas);
        Students::find($id)->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->fullName,
            'no_telp' => $request->notelp,
            'alamat' => $request->address,
            'kelas_id_kelas' => $request->kelas,
            'tuition_id_spp' => $request->tuition_id_spp
        ]);

        return redirect('/module/students')->with('success', 'New Student have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_nioni = Students::find($id);
        $student_nioni->delete();
        return redirect('/module/students')->with('success', 'Student Deleted');
    }
}
