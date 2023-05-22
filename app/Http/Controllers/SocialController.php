<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{

    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialLinks = Social::all();
        return view('Admin.Table.social', compact('socialLinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Add.social');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        Social::create($validatedData)->save();

        return redirect()->route('social.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Social::where('id', $id)->first();
        return view('Admin.Edit.social', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData = $this->validateData($request);
        $item          = Social::find($id);
        $item->update($validatedData);
        return redirect()->route('social.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Social::find($id)->delete();
        return redirect()->route('social.index')->with('message', 'Record Deleted Successfully');
    }
}
