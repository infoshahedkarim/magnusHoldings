<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($request->image) . '_2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
        } else {
            $imageName = null;
        }
        try{
        Banner::create([
            'image' => $imageName,
        ]);}
        catch(\Exception $e){
            return redirect()->back()->with('error', 'Banner creation failed: ' . $e->getMessage());
        }

        return redirect()->route('banner')->with('success', 'Banner created successfully.');
    }
}
