<?php

namespace App\Http\Controllers;

use App\Models\Education as ModelsEducation;
use Illuminate\Http\Request;

class Education extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'institute'   => 'required',
            'start'       => 'required',
            'end'         => 'required'
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ModelsEducation::all();
        return view('Admin.Table.education', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.education');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        ModelsEducation::create($validatedData)->save();

        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ModelsEducation::find($id);
        return view('Admin.Show_One_result.education', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsEducation::where('id', $id)->first();
        return view('Admin.Edit.education', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData = $this->validateData($request);
        $item          = ModelsEducation::find($id);
        $item->update($validatedData);
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsEducation::find($id)->delete();
        return redirect()->route('education.index')->with('message', 'Record Deleted Successfully');
    }
}
