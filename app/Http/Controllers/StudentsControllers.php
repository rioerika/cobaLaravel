<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = student::all();
        return view('students/index',['students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email= $request->email;
        // $student->jurusan = $request->jurusan;

        // $student -> save();

        $request ->validate ([
            'nama' => 'required',
            'nrp'=> 'required|size:9',
            'email'=>'required',
            'jurusan' => 'required'
        ]);
        student::create($request->all());
        return redirect('/students')->with('status', 'data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('StudentS/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
         $request ->validate ([
            'nama' => 'required',
            'nrp'=> 'required|size:9',
            'email'=>'required',
            'jurusan' => 'required'
        ]);

        Student::where('id',$student->id)->update([
            'nama' => 'required',
            'nrp'=> 'required|size:9',
            'email'=>'required',
            'jurusan' => 'required'
        ]);
        return redirect('/students')->with('status', 'data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student::destroy($student->id);
        return redirect('/students')->with('status', 'data berhasil dihapus!');
        
    }
}
