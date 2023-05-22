<?php

namespace App\Http\Controllers;

use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name'        => 'required',
            'description' => '',
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ModelsCategory::orderBy('id', 'DESC')->get();
        return view('Admin.Table.category', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        ModelsCategory::create($validatedData)->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // There is no need to view single category
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsCategory::where('id', $id)->first();
        return view('Admin.Edit.category', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData = $this->validateData($request);
        $item          = ModelsCategory::find($id);
        $item->update($validatedData);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsCategory::find($id)->delete();
        return redirect()->route('category.index')->with('message', 'Record Deleted Successfully');
    }
}
