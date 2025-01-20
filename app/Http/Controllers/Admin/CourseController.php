<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Common validation rules
    private $rules = [
        'course_name' => 'required|string|max:255',
        'teacher_id' => 'required|exists:users,id',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'status' => 'required|boolean',
        'duration' => 'required|integer|min:1',
        'category_id' => 'required|exists:categories,id',
    ];

    // Display a paginated list of courses with optional search
    public function index(Request $request)
    {
        $query = Course::query();

        if ($request->filled('search')) {
            $query->where('course_name', 'LIKE', '%' . $request->input('search') . '%');
        }

        $courses = $query->with(['teacher' => function ($query) {
            $query->where('role', 'teacher');
        }])
            ->orderBy('course_name')
            ->paginate(10)
            ->appends($request->only('search'));

        return view('admin.courses', compact('courses'));
    }

    // Show the form to create a new course
    public function create()
    {
        $teachers = User::where('role', 'teacher')->get();

        $categories = Category::all();

        return view('admin.create-course', compact('teachers', 'categories'));
    }

    // Save a new course to the database
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        Course::create($validatedData);

        return redirect()->route('admin.courses')->with('success', 'Course added successfully!');
    }

    // Show the form to edit a course
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $teachers = User::where('role', 'teacher')
            ->where('status', 1)
            ->get();
        $categories = Category::all();

        return view('admin.edit-course', compact('course', 'teachers', 'categories'));
    }


    // Update a course in the database
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validatedData = $request->validate($this->rules);

        $course->update($validatedData);

        return redirect()->route('admin.courses')->with('success', 'Course updated successfully!');
    }

    // Soft delete a course by setting status to 0
    public function destroy($id)
    {
        $course = Course::find($id);

        if (!$course) {
            return redirect()->route('admin.courses')->with('error', 'Course not found.');
        }

        $course->update(['status' => 0]);

        return redirect()->route('admin.courses')->with('success', 'Course has been deactivated successfully.');
    }
}
