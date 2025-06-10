<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;  
use Illuminate\Support\Facades\Storage;   

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::first();
        $visitorCount = $this->countVisitor();
        return view('components.footer', compact('footer', 'visitorCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'logodark' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'about' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url',
            'youtube' => 'required|url',
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = '_1_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
        } else {
            $imageName = null;
        }
        if ($request->hasFile('logodark')) {
            $image = $request->file('logodark');
            $imageName1 = '_2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName1);
        } else {
            $imageName1 = null;
        }

        try {
            Footer::create(
                [
                    'logo' => $imageName,
                    'logodark' => $imageName1,
                    'about' => $request->about,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'linkedin' => $request->linkedin,
                    'youtube' => $request->youtube,
                ]
            );
        } catch (\Exception $e) {
            return back()->with('error', 'Error saving footer: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Footer added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $footers = Footer::all();
        return view('bview.showfooter', compact('footers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $footers = Footer::find($id);
        return view('bview.editfooter', compact('footers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $footers = Footer::findOrFail($id);
        $request->validate([
            'logo' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'logodark' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            'about' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url',
            'youtube' => 'required|url',
        ]);

        if ($request->hasFile('logo')) {
            Storage::delete(public_path('storage/' . $footers->logo));
            $image = $request->file('logo');
            $imageName = '_1_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName);
        } else {
            $imageName = $footers->logo;
        }
        if ($request->hasFile('logodark')) {
            Storage::delete(public_path('storage/' . $footers->logodark));
            $image = $request->file('logodark');
            $imageName1 = '_2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $imageName1);
        } else {
            $imageName1 = $footers->logodark;
        }

        try {
            Footer::where('id', $id)->update(
                [
                    'logo' => $imageName,
                    'logodark' => $imageName1,
                    'about' => $request->about,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'linkedin' => $request->linkedin,
                    'youtube' => $request->youtube,
                ]
            );
        } catch (\Exception $e) {
            return back()->with('error', 'Error updating footer: ' . $e->getMessage());
        }

        return redirect()->route('footer.all')->with('success', 'Footer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        //
    }

    public function countVisitor()
{
    $filePath = 'visitor_count.txt';

    // Check if file exists
    if (!Storage::exists($filePath)) {
        Storage::put($filePath, 0);
    }

    // Get current count
    $count = (int)Storage::get($filePath);

    // Increment count
    $count++;

    // Store updated count
    Storage::put($filePath, $count);

    return $count;
}

}
