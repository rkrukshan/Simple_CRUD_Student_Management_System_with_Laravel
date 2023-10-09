<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses=House::paginate(3);
        return view('house.index',compact('houses'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('house.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'house_name'=>'required',
            
        ]);
        House::create($request->all());
        return redirect()->route('house.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $houses=House::find($id);
        return view('house.show',compact('houses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $houses=House::find($id);
        return view('house.edit',compact('houses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $houses=House::find($id);
        $houses->update($request->all());

        return redirect()->route('house.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        House::destroy($id);
        return redirect()->route('house.index');
    }
}
