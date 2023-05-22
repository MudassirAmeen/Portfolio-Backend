<?php

namespace App\Http\Controllers;

use App\Models\Service as ModelsService;
use Illuminate\Http\Request;

class Service extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name'            => 'required',
            'image'           => 'required',
            'description'     => 'required',
            'longdescription' => '',
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ModelsService::all();
        return view('Admin.Table.service', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $this->validateData($request);
        ModelsService::create($validatedData);
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ModelsService::where('id', $id)->first();
        return view('Admin.Show_One_result.service', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsService::where('id', $id)->first();
        return view('Admin.Edit.service', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'    => 'required',
            'description'    => 'required',
            'longdescription' => ''
        ]);

        ModelsService::find($id)->update($validatedData);
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsService::find($id)->delete();
        return redirect()->route('service.index')->with('message', 'Record Deleted Successfully');
    }
}
