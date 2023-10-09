<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\House;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students=Student::paginate(3);
       return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $grades=Grade::all();
        // $houses=House::all();
        $grades=Grade::pluck('grade_name','id');
        $houses=House::pluck('house_name','id');
        $subjects=Subject::pluck('subject_name','id');
        // $grades=Grade::all(['grade_name','id']);
        // dd($grades);
        return view('student.create',compact('grades','houses','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)// send created values to db
    {
        $request->validate([
        'admision_number'=>'required',
        'first_name'=>'required',
        'last_name'=>'required',
        'address'=>'required',
        'dob'=>'required|date',
        'subject_id'=>'required',
        'nic'=>'required'
    ]);

        // $student=$request->except('subject_id');
        // $students =Student::create($student);
        $student=Student::create($request->except('subject_id'));
        $studentsid= $student->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
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
    public function update(Request $request, string $id, Student $student)
    {
        $request->validate([
            'admision_number'=>'required',
            'first_name'=>'required'|regex:/[a-z],
            'last_name'=>'required',
            'address'=>'required',
            'dob'=>'required|date',
            'subject_id'=>'required',
            'nic'=>'required'
        ]);
        $students=Student::find($id);
        $students->update($request->all());
        return redirect()->route('student.index',compact('students'));

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
