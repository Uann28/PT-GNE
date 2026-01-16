<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $information = Information::latest()->paginate(10);

        return view('admin.information.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.information.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,publish',
            'image' =>'nullable|image|max:2048',
        ]);

        $data = [
            'user_id'       => auth()->id(),
            'title'         => $request->title,
            'slug'          => Str::slug($request->title),
            'content'       => $request->content,
            'status'        => $request->status,
            'published_at'  => $request->status === 'publish' ? now() : null,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('information', 'public');
        }

        Information::create($data);
        return redirect()->route('information.index')->with('success', 'Informasi berhasil ditambahkan!');
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
    public function edit(Information $information)
    {
        return view('admin.information.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Information $information)
    {
        $request->validate([
            'title'     => 'required|string|max:255',
            'content'   => 'required',
            'status'    =>  'required|in:draft,publish',
            'image'     => 'nullable|image|max:2048',
        ]);

        $information->title = $request->title;
        $information->slug = Str::slug($request->title);
        $information->status = $request->status;
        $information->published_at = $request->status === 'publish' ? now() : null;
        
        if($request->hasFile('image')) {
            $information->image = $request->file('image')->store('information', 'public');
        }

        $information->save();

        return redirect()->route('information.index')->with('success', 'Informasi diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Information $information)
    {
        $information->delete();

        return redirect()->route('information.index')->with('success', 'Information berhasil dihapus!');
    }
}
