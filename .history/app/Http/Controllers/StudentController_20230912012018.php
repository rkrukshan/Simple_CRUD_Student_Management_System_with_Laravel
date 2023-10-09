<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students=Student::all();
       return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $students=Student::create($request->all());
       return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students=Student::find($id)
        return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students=Student::find($id);
        return view('student.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students=Student::find($id);
        $students->first_name=$request->input('first_name');
        $students->last_name=$request->input('last_name');
        $students->save();
        return redirect()->view('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect()->view('student.index');
    }
}
