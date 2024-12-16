<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Requests\StoreCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Courses::all());
        return view('courses.index',['courses'=>Course::all()]);
    }
    public function trashed()
    {
        $courses=Courses::onlyTrashed()->get();
        return view('courses.trashed',['courses'=>$courses]);
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
    public function store(StoreCoursesRequest $request)
    {
        Courses::create($request->validated());
        return redirect() -> route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoursesRequest $request, Courses $course)
    {
        $course->update($request->validated());
        return redirect()->route('courses.index');
    }

    public function trash($id){
        Courses::destroy($id);
        return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course=Courses::withTrashed()->where('id',$id)->first();
        $course->forceDelete();
        return redirect()->route('courses.trashed');
    }

    public function restore($id){
        $course=Courses::withTrashed()->where('id',$id)->first();
        $course->restore();
        return redirect()->route('courses.trashed');
    }
}