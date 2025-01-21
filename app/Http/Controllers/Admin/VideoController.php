<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // Common validation rules
    private $rules = [
        'video_name' => 'required|string|max:255',
        'course_id' => 'required|exists:courses,id',
        'teacher_id' => 'required|exists:users,id',
        'description' => 'required|string',
        'duration' => 'required|integer|min:1',
        'url' => 'required|file|mimes:mp4,avi,mov,wmv|max:51200',
        'status' => 'required|boolean',
    ];

    // Display a paginated list of videos with optional search
    public function index(Request $request)
    {
        $query = Video::query();

        if ($request->filled('search')) {
            $query->where('video_name', 'LIKE', '%' . $request->input('search') . '%');
        }

        $videos = $query->orderBy('video_name')
            ->paginate(10)
            ->appends($request->only('search'));

        return view('admin.videos', compact('videos'));
    }

    // Show the form to create a new video
    public function create()
    {
        $courses = Course::all();
        $teachers = User::where('role', 'teacher')->where('status', 1)->get();
        return view('admin.create-video', compact('courses', 'teachers'));
    }

    // Save a new video to the database
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        $videoPath = $request->file('video_file')->store('videos', 'public');

        Video::create(array_merge($validatedData, ['url' => $videoPath]));

        return redirect()->route('admin.videos')->with('success', 'Video added successfully!');
    }

    // Show the form to edit a video
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        $courses = Course::all();
        $teachers = User::where('role', 'teacher')->where('status', 1)->get();
        return view('admin.edit-video', compact('video', 'courses', 'teachers'));
    }

    // Update a video in the database
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $validatedData = $request->validate($this->rules);

        $video->update($validatedData);

        return redirect()->route('admin.videos')->with('success', 'Video updated successfully!');
    }

    // Soft delete a video by setting status to 0
    public function destroy($id)
    {
        $video = Video::find($id);

        if (!$video) {
            return redirect()->route('admin.videos')->with('error', 'Video not found.');
        }

        $video->update(['status' => 0]);

        return redirect()->route('admin.videos')->with('success', 'Video has been deactivated successfully.');
    }
}
