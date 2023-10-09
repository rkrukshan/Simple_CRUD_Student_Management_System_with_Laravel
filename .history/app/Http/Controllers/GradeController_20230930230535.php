<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades=Grade::paginate(3);
        return view('grade.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'grade_name'=>'required',
            'grade_group'=>'required',
            'grade_order'=>'required'
        ]);
        Grade::create($request->all());
        return redirect()->route('grade.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grades=Grade::find($id);
        $students=Grade::find($id)->students; //join grade with student
        // dd($students);
        return view('grade.show',compact('grades','students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grades=Grade::find($id);
        return view('grade.edit',compact('grades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $grades=Grade::find($id);
        $grades->update($request->all());
        return redirect()->route('grade.index',compact('grades'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Grade::destroy($id);
        return redirect()->route('grade.index');
    }
}
