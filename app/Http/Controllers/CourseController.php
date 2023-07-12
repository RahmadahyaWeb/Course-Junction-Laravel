<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Course !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
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
        ]);

        Course::create($attributes);

        return redirect()->route('courses.index')->with('success', 'Course was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $attributes = $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'duration'      => 'required',
        ]);

        $course->update($attributes);

        return redirect()->route('courses.index')->with('success', 'Course was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course was deleted');
    }
}
