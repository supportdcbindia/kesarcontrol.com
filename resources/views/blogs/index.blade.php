@extends('admin.layout.index')

@section('content')
<div class="pagetitle">
  <h1>Blogs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active">Blogs</li>
    </ol>
  </nav>
</div>
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="card-title mb-0">Blog List</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBlogModal">Add Blog</button>
          </div>
          @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          <table class="table datatable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Tags</th>
                <th>Category</th>
                <th>Author</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($blogs as $blog)
              <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->tags }}</td>
                <td>{{ $blog->category ? $blog->category->name : '-' }}</td>
                <td>{{ $blog->author }}</td>
                <td>
                  <span class="badge {{ $blog->posted ? 'bg-success' : 'bg-secondary' }}">
                    {{ $blog->posted ? 'Posted' : 'Draft' }}
                  </span>
                </td>
                <td>{{ $blog->date }}</td>
                <td>
                  <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                    data-bs-target="#editBlogModal{{ $blog->id }}">Edit</button>
                  <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                      onclick="return confirm('Are you sure?')">Delete</button>
                  </form>
                </td>
              </tr>
              <!-- Edit Modal -->
              <div class="modal fade" id="editBlogModal{{ $blog->id }}" tabindex="-1"
                aria-labelledby="editBlogModalLabel{{ $blog->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editBlogModalLabel{{ $blog->id }}">Edit Blog</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="modal-body">
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="title{{ $blog->id }}" class="form-label">Title</label>
                            <input type="text" name="title" id="title{{ $blog->id }}" class="form-control"
                              value="{{ $blog->title }}" required>
                          </div>
                          <div class="col-md-6">
                            <label for="photo{{ $blog->id }}" class="form-label">Photo</label>
                            <input type="file" name="photo" id="photo{{ $blog->id }}" class="form-control">
                            @if($blog->photo)
                              <img src="{{ asset('/storage/blog_photos/' . $blog->photo) }}" alt="Current Photo" class="img-thumbnail mt-2" style="max-width: 370px;">
                            @endif
                          </div>
                          <div class="col-md-6">
                            <label for="tags{{ $blog->id }}" class="form-label">Tags</label>
                            <input type="text" name="tags" id="tags{{ $blog->id }}" class="form-control"
                              value="{{ $blog->tags }}">
                          </div>
                          <div class="col-md-6">
                            <label for="author{{ $blog->id }}" class="form-label">Author</label>
                            <input type="text" name="author" id="author{{ $blog->id }}" class="form-control"
                              value="{{ $blog->author }}">
                          </div>
                          <div class="col-md-6">
                            <label for="category_id{{ $blog->id }}" class="form-label">Category</label>
                            <select name="category_id" id="category_id{{ $blog->id }}" class="form-control">
                              <option value="">-- Select Category --</option>
                              @foreach($categories as $category)
                              <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' :
                                '' }}>{{ $category->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-md-6">
                            <label for="posted{{ $blog->id }}" class="form-label">Status</label>
                            <select name="posted" id="posted{{ $blog->id }}" class="form-control">
                              <option value="0" {{ $blog->posted == 0 ? 'selected' : '' }}>Draft</option>
                              <option value="1" {{ $blog->posted == 1 ? 'selected' : '' }}>Posted</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <label for="date{{ $blog->id }}" class="form-label">Date</label>
                            <input type="date" name="date" id="date{{ $blog->id }}" class="form-control"
                              value="{{ $blog->date }}">
                          </div>
                          <div class="col-md-6">
                            <label for="show_at{{ $blog->id }}" class="form-label">Show At</label>
                            <select name="show_at" id="show_at{{ $blog->id }}" class="form-control">
                              <option value="0" {{ $blog->show_at == 0 ? 'selected' : '' }}>None</option>
                              <option value="1" {{ $blog->show_at == 1 ? 'selected' : '' }}>Trending</option>
                              <option value="2" {{ $blog->show_at == 2 ? 'selected' : '' }}>Popular</option>
                              <option value="3" {{ old('show_at')=='3' ? 'selected' : '' }}>Heading</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <label for="content{{ $blog->id }}" class="form-label">Content</label>
                            <textarea name="content" id="content{{ $blog->id }}"
                              class="form-control">{{ $blog->content }}</textarea>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Add Modal -->
<div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBlogModalLabel">Add Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="row g-3">
            <div class="col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="col-md-6">
              <label for="photo" class="form-label">Photo</label>
              <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="col-md-6">
              <label for="tags" class="form-label">Tags</label>
              <input type="text" name="tags" id="tags" class="form-control" value="{{ old('tags') }}">
            </div>
            <div class="col-md-6">
              <label for="author" class="form-label">Author</label>
              <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}">
            </div>
            <div class="col-md-6">
              <label for="category_id" class="form-label">Category</label>
              <select name="category_id" id="category_id" class="form-control">
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id')==$category->id ? 'selected' : '' }}>{{
                  $category->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6">
              <label for="posted" class="form-label">Status</label>
              <select name="posted" id="posted" class="form-control">
                <option value="0" {{ old('posted')=='0' ? 'selected' : '' }}>Draft</option>
                <option value="1" {{ old('posted')=='1' ? 'selected' : '' }}>Posted</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="date" class="form-label">Date</label>
              <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
            </div>
            <div class="col-md-6">
              <label for="show_at" class="form-label">Show At</label>
              <select name="show_at" id="show_at" class="form-control">
                <option value="0" {{ old('show_at')=='0' ? 'selected' : '' }}>None</option>
                <option value="1" {{ old('show_at')=='1' ? 'selected' : '' }}>Trending</option>
                <option value="2" {{ old('show_at')=='2' ? 'selected' : '' }}>Popular</option>
                <option value="3" {{ old('show_at')=='3' ? 'selected' : '' }}>Heading</option>
              </select>
            </div>
            <div class="col-12">
              <label for="content" class="form-label">Content</label>
              <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Create</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // For add modal
        if(document.getElementById('content')) {
            CKEDITOR.replace('content');
        }
        // For all edit modals
        document.querySelectorAll('textarea[id^="content"]').forEach(function(textarea) {
            if(textarea.id !== 'content') {
                CKEDITOR.replace(textarea.id);
            }
        });
    });
  </script>
  @endsection