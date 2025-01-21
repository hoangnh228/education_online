<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $query = Review::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->whereHas('user', function ($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%');
            })->orWhereHas('course', function ($q) use ($search) {
                $q->where('name', 'LIKE', '%' . $search . '%');
            });
        }

        $reviews = $query->with(['user', 'course'])
            ->orderBy('created_at', 'desc')
            ->paginate(10)
            ->appends($request->only('search'));

        return view('admin.reviews', compact('reviews'));
    }

    public function destroy($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return redirect()->route('admin.reviews')->with('error', 'Review not found.');
        }

        $review->delete();

        return redirect()->route('admin.reviews')->with('success', 'Review deleted successfully.');
    }
}
