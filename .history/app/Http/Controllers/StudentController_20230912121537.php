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
       Student::create($request->all());
       return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students=Student::find($id);
        return view('student.show',compact('students'));
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
        $student
        // $students->admision_number=$request->input('admision_number');
        // $students->first_name=$request->input('first_name');
        // $students->last_name=$request->input('last_name');
        // $students->gender=$request->input('gender');
        // $students->address=$request->input('address');
        // $students->dob=$request->input('dob');
        // $students->house_id=$request->input('house_id');
        // $students->grade_id=$request->input('grade_id');
        // $students->nic=$request->input('nic');
        // $students->save();
        return redirect()->route('student.index',compact('students'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect()->route('student.index');
    }
}
