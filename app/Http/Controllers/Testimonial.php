<?php

namespace App\Http\Controllers;

use App\Models\Testimonial as ModelsTestimonial;
use Illuminate\Http\Request;

class Testimonial extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name'    => 'required',
            'role'    => 'required',
            'comment' => 'required',
            'image'   => 'required',
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ModelsTestimonial::all();
        return view('Admin.Table.testimonial', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.testimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $this->validateData($request);
        ModelsTestimonial::create($validatedData);
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ModelsTestimonial::where('id', $id)->first();
        return view('Admin.Show_One_result.testimonial', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsTestimonial::where('id', $id)->first();
        return view('Admin.Edit.testimonial', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'    => 'required',
            'role'    => 'required',
            'comment' => 'required'
        ]);

        ModelsTestimonial::find($id)->update($validatedData);
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsTestimonial::find($id)->delete();
        return redirect()->route('testimonial.index')->with('message', 'Record Deleted Successfully');
    }
}
