<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalExperience as ModelsProfessionalExperience;
use Illuminate\Http\Request;

class ProfessionalExperience extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name'        => 'required',
            'longdescription' => 'required',
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
        $items = ModelsProfessionalExperience::all();
        return view('Admin.Table.professional', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.professional');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        ModelsProfessionalExperience::create($validatedData)->save();

        return redirect()->route('professional.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ModelsProfessionalExperience::find($id);
        return view('Admin.Show_One_result.professional', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsProfessionalExperience::where('id', $id)->first();
        return view('Admin.Edit.professional', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $this->validateData($request);
        $item          = ModelsProfessionalExperience::find($id);
        $item->update($validatedData);
        return redirect()->route('professional.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsProfessionalExperience::find($id)->delete();
        return redirect()->route('professional.index')->with('message', 'Record Deleted Successfully');
    }
}
