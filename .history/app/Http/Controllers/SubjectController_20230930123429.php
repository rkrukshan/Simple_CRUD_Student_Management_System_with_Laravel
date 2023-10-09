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
        $subjects=Subject::paginate(3);
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
        $request->validate([
            ''
        ]);
        Subject::create($request->all());
        return redirect()->route('subject.index');


    //     $subject=$request->except('subject_id');
    //     $subjects =Subject::create($subject);
    //     $subjectsid= $subjects->id;

    //     $subject=$request->input('subject_id');//get subject_id
    //     $subjects=Subject::find($subjectsid);//gether perticular subject which is belongsto subject
    //     $subjects->subjects()->attach($subject);//insert subject_id into subject tablw
    //    return redirect()->route('subject.index');
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
