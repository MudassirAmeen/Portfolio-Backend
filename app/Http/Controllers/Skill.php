<?php

namespace App\Http\Controllers;

use App\Models\Skill as ModelsSkill;
use Illuminate\Http\Request;

class Skill extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name'       => 'required',
            'percentage' => 'required|numeric|min:0|max:100'
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ModelsSkill::all();
        return view('Admin.Table.skill', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.skill');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        ModelsSkill::create($validatedData)->save();

        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // There is no need to view single skill
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsSkill::where('id', $id)->first();
        return view('Admin.Edit.skill', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData = $this->validateData($request);
        $item          = ModelsSkill::find($id);
        $item->update($validatedData);
        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsSkill::find($id)->delete();
        return redirect()->route('skill.index')->with('message', 'Record Deleted Successfully');
    }
}
