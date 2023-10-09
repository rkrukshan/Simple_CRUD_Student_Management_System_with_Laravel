<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects=Subject::all();
        return view('subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Subject::create($request->all());
        // return redirect()->route('subject.index');


        $ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');=$request->except('subject_id');
        $ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');s = $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');::create($ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index'););
        $ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');sid= $ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');s->id;

        $subject=$request->input('subject_id');//get subject_id
        $ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');s= $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');::find($ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');sid);//gether perticular  $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index'); which is belongsto subject
        $ $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');s->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route(' $student=$request->except('subject_id');
        $students =Student::create($student);
        $studentsid= $students->id;

        $subject=$request->input('subject_id');//get subject_id
        $students=Student::find($studentsid);//gether perticular student which is belongsto subject
        $students->subjects()->attach($subject);//insert subject_id into subject tablw
       return redirect()->route('student.index');.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subjects=Subject::find($id);
        return view('subject.show',compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subjects=Subject::find($id);
        return view('subject.edit',compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subjects=Subject::find($id);
        $subjects->update($request->all());
        return redirect()->route('subject.index',compact('subjects'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subject::destroy($id);
        return redirect()->route('subject.index');
    }
}
