<?php

namespace App\Http\Controllers;

use App\Models\About as ModelsAbout;
use Illuminate\Http\Request;

class About extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name'     => 'required',
            'birthday' => 'required',
            'website'  => 'required',
            'phone'    => 'required',
            'city'     => 'required',
            'degree'   => 'required',
            'email'    => 'required',
            'image'    => 'required'
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ModelsAbout::all();
        return view('Admin.Table.about', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $this->validateData($request);
        ModelsAbout::create($validatedData);
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ModelsAbout::where('id', $id)->first();
        return view('Admin.Show_One_result.about', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsAbout::where('id', $id)->first();
        return view('Admin.Edit.about', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'     => 'required',
            'birthday' => 'required',
            'website'  => 'required',
            'phone'    => 'required',
            'city'     => 'required',
            'degree'   => 'required',
            'email'    => 'required'
        ]);

        ModelsAbout::find($id)->update($validatedData);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsAbout::find($id)->delete();
        return redirect()->route('about.index')->with('message', 'Record Deleted Successfully');
    }
}
