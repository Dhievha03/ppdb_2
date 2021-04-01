<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PDF;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'jns_kelamin'=>'required',
            'temp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'asal_sekolah'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required'
        ]);
        Student::create($request->all());
        return back()->with('success', 'Siswa baru berhasil di tambahkan');
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
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'jns_kelamin'=>'required',
            'temp_lahir'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'asal_sekolah'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required'
        ]);
        $student->update($request->all());
        return redirect()->route('admin.page')->with('success', 'Siswa berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.page')->with('success', 'Data Berhasil dihapus');
    }

    public function print()
    {
        $students = Student::all();

        $pdf = PDF::loadview('student.print', compact('students'));
        return $pdf->stream();
    }
}
