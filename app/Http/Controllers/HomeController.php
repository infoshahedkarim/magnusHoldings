<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::all();
        $projects = Project::all();
        return view('bview.showhome', compact('home', 'projects'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title' => 'required',
            'image1' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title1' => 'required',
            'image2' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'title2' => 'required',
            'number' => 'required',
            'url' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($request->title) . '_1_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
        } else {
            $imageName = null;
        }
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $imageName1 = Str::slug($request->title) . '_2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName1);
        } else {
            $imageName1 = null;
        }
        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $imageName2 = Str::slug($request->title) . '_3_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName2);
        } else {
            $imageName2 = null;
        }
        try {
            Home::create([
                'image' => $imageName,
                'title' => $request->title,
                'image1' => $imageName1,
                'title1' => $request->title1,
                'image2' => $imageName2,
                'title2' => $request->title2,
                'number' => $request->number,
                'url' => $request->url,
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Error saving project: ' . $e->getMessage());
        }
        return redirect()->back()->with('success', 'Project added successfully!');
    }

    public function show(){
        $home = Home::all();
        return view('bview.showhome', compact('home'));
    }

    public function edit($id)
    {
        $home = Home::findOrFail($id);
        return view('bview.edithome', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $home = Home::findOrFail($id);
        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'title' => 'required',
            'image1' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'title1' => 'required',
            'image2' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'title2' => 'required',
            'number' => 'required',
            'url' => 'required',
        ]);
        if ($request->hasFile('image')) {
            Storage::delete(public_path('storage/' . $home->image));
            $image = $request->file('image');
            $imageName = Str::slug($request->title) . '_1_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
        } else {
            $imageName = $home->image;
        }
        if ($request->hasFile('image1')) {
            Storage::delete(public_path('storage/' . $home->image1));
            $image = $request->file('image1');
            $imageName1 = Str::slug($request->title1) . '_2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName1);
        } else {
            $imageName1 = $home->image1;
        }
        if ($request->hasFile('image2')) {
            Storage::delete(public_path('storage/' . $home->image2));
            $image = $request->file('image2');
            $imageName2 = Str::slug($request->title2) . '_3_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName2);
        } else {
            $imageName2 = $home->image2;
        }
        try {
            Home::whereId($id)->update([
                'image' => $imageName,
                'title' => $request->title,
                'image1' => $imageName1,
                'title1' => $request->title1,
                'image2' => $imageName2,
                'title2' => $request->title2,   
                'number' => $request->number,
                'url' => $request->url,
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Error updating project: ' . $e->getMessage());
        }
        return redirect()->route('home.all')->with('success', 'Project updated successfully!');    
    }
}
