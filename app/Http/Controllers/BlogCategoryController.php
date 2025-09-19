<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    // Display a listing of the blog categories
    public function index()
    {
        $categories = BlogCategory::all();
        return view('blog_categories.index', compact('categories'));
    }

    // Show the form for creating a new blog category
    public function create()
    {
        return view('blog_categories.create');
    }

    // Store a newly created blog category in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
        ]);
        BlogCategory::create($request->only('name'));
        return redirect()->route('blog-categories.index')->with('success', 'Category created successfully.');
    }

    // Show the form for editing the specified blog category
    public function edit($id)
    {
        $category = BlogCategory::findOrFail($id);
        return view('blog_categories.edit', compact('category'));
    }

    // Update the specified blog category in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,' . $id,
        ]);
        $category = BlogCategory::findOrFail($id);
        $category->update($request->only('name'));
        return redirect()->route('blog-categories.index')->with('success', 'Category updated successfully.');
    }

    // Remove the specified blog category from storage
    public function destroy($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('blog-categories.index')->with('success', 'Category deleted successfully.');
    }
}
