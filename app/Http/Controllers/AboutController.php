<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::orderby('id','desc')->first();
        return view('about',['about'=>$about]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'quote' => 'required',
              
        ]);
        About::create($data);
        return redirect()->back()->with('success', 'Contact added successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        $updates = About::all();
        return view('bview.showabout', compact('updates'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $updates = About::find($id);
        return view('bview.editabout', compact('updates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'quote' => 'required',
              
        ]);
        About::where('id', $id)->update($data);
        return redirect()->route('about.all')->with('success', 'Contact updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
