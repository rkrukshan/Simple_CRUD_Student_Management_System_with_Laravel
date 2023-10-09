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
        return view('subject.index');
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
        $subjects=Subject::create($request->all());
        return view('student.create',compact('subjects'));
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
        return view('subject.edit');
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
        $subjects=Subject::destroy($)
    }
}
