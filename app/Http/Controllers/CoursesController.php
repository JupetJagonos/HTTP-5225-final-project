<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;

class CoursesController extends Controller
{
    public function index()
    {
        $course=Course::all();
        // dd($course);
        return view('courses.index', ['courses' => $course]);
    }

    public function trashed()
    {
        $courses = Course::onlyTrashed()->get();
        return view('courses.trashed', ['courses' => $courses]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(StoreCoursesRequest $request)
    {
        Course::create($request->validated());
        return redirect()->route('courses.index');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(UpdateCoursesRequest $request, Course $course)
    {
        $course->update($request->validated());
        return redirect()->route('courses.index');
    }

    public function trash($id)
    {
        Course::destroy($id);
        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $course = Course::withTrashed()->where('id', $id)->first();
        $course->forceDelete();
        return redirect()->route('courses.trashed');
    }

    public function restore($id)
    {
        $course = Course::withTrashed()->where('id', $id)->first();
        $course->restore();
        return redirect()->route('courses.trashed');
    }
}
