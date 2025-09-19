<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display a listing of the blogs
    public function index(Request $request)
    {
        $filter = $request->input('show_at'); // 0: none, 1: trending, 2: popular
        $query = Blog::with('category')->orderByDesc('id');
        if ($filter !== null && in_array($filter, ['0', '1', '2'], true)) {
            $query->where('show_at', $filter);
        }
        $blogs = $query->get();
        $categories = BlogCategory::all();
        return view('blogs.index', compact('blogs', 'categories', 'filter'));
    }

    // Show the form for creating a new blog
    public function create()
    {
        $categories = BlogCategory::all();
        return view('blogs.create', compact('categories'));
    }

    // Store a newly created blog in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:190',
            'slug' => 'nullable|string|max:190',
            'tags' => 'nullable|string|max:40',
            'content' => 'nullable|string',
            'photo' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'posted' => 'required|in:0,1',
            'date' => 'nullable|date',
            'author' => 'nullable|string|max:40',
            'category_id' => 'nullable|exists:blog_categories,id',
        ]);

        $data = $request->except('photo');
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/blog_photos', $filename);
            $data['photo'] = $filename;
        }

        Blog::create($data);
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    // Show the form for editing the specified blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::all();
        return view('blogs.edit', compact('blog', 'categories'));
    }

    // Update the specified blog in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:190',
            'slug' => 'nullable|string|max:190',
            'tags' => 'nullable|string|max:40',
            'content' => 'nullable|string',
            'photo' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'posted' => 'required|in:0,1',
            'date' => 'nullable|date',
            'author' => 'nullable|string|max:40',
            'category_id' => 'nullable|exists:blog_categories,id',
        ]);
        $blog = Blog::findOrFail($id);
        $data = $request->except('photo');
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/blog_photos', $filename);
            $data['photo'] = $filename;
        }
        $blog->update($data);
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Remove the specified blog from storage
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
