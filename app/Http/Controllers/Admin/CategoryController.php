<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Common validation rules
    private $rules = [
        'category_name' => 'required|string|max:255',
    ];

    // Display a paginated list of categories with optional search
    public function index(Request $request)
    {
        $query = Category::query();

        if ($request->filled('search')) {
            $query->where('category_name', 'LIKE', '%' . $request->input('search') . '%');
        }

        $categories = $query->orderBy('category_name')
            ->paginate(10)
            ->appends($request->only('search'));

        return view('admin.categories', compact('categories'));
    }

    // Show the form to create a new category
    public function create()
    {
        return view('admin.create-category');
    }

    // Save a new category to the database
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules);

        Category::create($validatedData);

        return redirect()->route('admin.categories')->with('success', 'Category added successfully!');
    }

    // Show the form to edit a category
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.edit-category', compact('category'));
    }

    // Update a category in the database
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validatedData = $request->validate($this->rules);

        $category->update($validatedData);

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully!');
    }

    // Delete a category from the database
    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('admin.categories')->with('error', 'Category not found.');
        }

        $category->delete();

        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully.');
    }
}
