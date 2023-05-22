<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio as ModelsPortfolio;
use Illuminate\Http\Request;

class Portfolio extends Controller
{
    public function validateData(Request $request)
    {
        $validateData = $request->validate([
            'featureImage' => 'required',
            'description'  => 'required',
            'category'     => 'required',
            'client'       => 'required',
            'date'         => 'required',
            'name'         => 'required',
            'url'          => 'required',
        ]);

        return $validateData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ModelsPortfolio::all();
        return view('Admin.Table.portfolio', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.Add.portfolio', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        $newItem = ModelsPortfolio::create($validatedData);

        $images = $request->file('images');
        $imageGallery = [];
        foreach ($images as $image) {
            $name = time() . $image->getClientOriginalName();
            $imageExtention = $image->extension();
            $fullImageName = $name . "." . $imageExtention;
            $image->storeAs("public/AdminPanel/assets/Portfolio", $fullImageName);
            $imageGallery[] = $fullImageName;
        }

        $newItem->images = serialize($imageGallery);
        $newItem->save();
        return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ModelsPortfolio::where('id', $id)->first();
        $imageGallery = unserialize($item->images);
        return view('Admin.Show_One_result.portfolio', compact('item', 'imageGallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = ModelsPortfolio::where('id', $id)->first();
        $categories = Category::all();
        return view('Admin.Edit.portfolio', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'description'  => 'required',
            'category'     => 'required',
            'client'       => 'required',
            'date'         => 'required',
            'name'         => 'required',
            'url'          => 'required',
        ]);

        ModelsPortfolio::find($id)->update($validatedData);
        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ModelsPortfolio::find($id)->delete();
        return redirect()->route('portfolio.index')->with('message', 'Record Deleted Successfully');
    }
}
