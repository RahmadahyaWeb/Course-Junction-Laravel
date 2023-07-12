<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Course Material !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('materials.index', [
            'materials' => Material::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materials.create', [
            'courses' => Course::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'duration'      => 'required',
            'embed_link'    => 'required',
            'course_id'     => 'required',
        ], $message = [
            'embed_link.required' => 'The link field is required.',
            'course_id.required' => 'The course field is required.'
        ]);

        Material::create($attributes);

        return redirect()->route('materials.index')->with('success', 'Course material was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        $courses = Course::all();
        return view('materials.show', compact('material', 'courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        $courses = Course::all();
        return view('materials.edit', compact('courses', 'material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        $attributes = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'duration'      => 'required',
            'embed_link'    => 'required',
            'course_id'     => 'required',
        ], $message = [
            'embed_link.required' => 'The link field is required.',
            'course_id.required' => 'The course field is required.'
        ]);

        $material->update($attributes);

        return redirect()->route('materials.index')->with('success', 'Course material was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->route('materials.index')->with('success', 'Course material was deleted');
    }
}
