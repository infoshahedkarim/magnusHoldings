<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Home;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('bview.showproject', compact('projects'));
    }
    
    public function allproject()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        $homes = Home::first();
        $projects = Project::all();
        return view('index', compact('homes', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'place' => 'required',
            'price' => 'required',
            'address' => 'required',
            'squareft' => 'required',
            'image1' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image2' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'floorplan' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'detail' => 'required',  
            'map' => 'required',  
        ]);

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $imageName1 = Str::slug($request->title) . '_1_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName1);
        } else {
            $imageName1 = null;
        }

        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $imageName2 = Str::slug($request->title) . '_2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName2);
        } else {
            $imageName2 = null;
        }
        
        if ($request->hasFile('floorplan')) {
            $image = $request->file('floorplan');
            $imageName3 = Str::slug($request->title) . '_3_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName3);
        } else {
            $imageName3 = null;
        }

        try {
            Project::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'place' => $request->place,
                'price' => $request->price,
                'address' => $request->address,
                'squareft' => $request->squareft,
                'image1' => $imageName1,
                'image2' => $imageName2,
                'floorplan' => $imageName3,
                'detail' => $request->detail,
                'map' => $request->map,
            ]);
            
        } catch (\Exception $e) {
            return back()->with('error', 'Error saving project: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Project added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $projects = Project::where('slug', $slug)->firstOrFail(); // Fetch product by slug
        return view('projectdetails', compact('projects'));
    }
    

    public function alls(){
        $projects = Project::all();
        return view('bview.showproject', compact('projects'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('bview.editproject', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'place' => 'required',
            'price' => 'required',
            'address' => 'required',
            'squareft' => 'required',
            'image1' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'image2' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'floorplan' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'detail' => 'required',  
            'map' => 'required',  
        ]);
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $imageName1 = Str::slug($request->title) . '_1_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName1);
            Storage::delete(public_path('storage/' . $project->image1));
        } else {
            $imageName1 = $project->image1;
        }
        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $imageName2 = Str::slug($request->title) . '_2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName2);
            Storage::delete(public_path('storage/' . $project->image2));
        } else {
            $imageName2 = $project->image2;
        }
        if ($request->hasFile('floorplan')) {
            $image = $request->file('floorplan');
            $imageName3 = Str::slug($request->title) . '_3_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName3);
            Storage::delete(public_path('storage/' . $project->floorplan));
        } else {
            $imageName3 = $project->floorplan;
        }
        try {
            $project->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'place' => $request->place,
                'price' => $request->price,
                'address' => $request->address,
                'squareft' => $request->squareft,
                'image1' => $imageName1,
                'image2' => $imageName2,
                'floorplan' => $imageName3,
                'detail' => $request->detail,
                'map' => $request->map,
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Error updating project: ' . $e->getMessage());
        }
        return redirect()->route('project.alls')->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $project = Project::findOrFail($id);
            Storage::delete(public_path('storage/' . $project->image1));
            Storage::delete(public_path('storage/' . $project->image2));
            Storage::delete(public_path('storage/' . $project->floorplan));
            $project->delete();
        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting project: ' . $e->getMessage());      
        }
        return redirect()->back()->with('success', 'Project deleted successfully!');
        
        
    }

    public function checkSlug($slug)
    {
        // Check if the slug exists in the database
        $slugExists = Project::where('slug', $slug)->exists();
    
        // Return a JSON response with the result
        return response()->json([
            'exists' => $slugExists
        ]);
    }



}
