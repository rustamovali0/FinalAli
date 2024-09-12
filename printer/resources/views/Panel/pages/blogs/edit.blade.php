@extends('Panel.layouts.app')
@section('content')
<div class="container">
    <h2>Edit Blog</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $blog->title }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control" value="{{ $blog->slug }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ $blog->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image (optional)</label>
            <input type="file" id="image" name="image" class="form-control">
            @if ($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" style="max-width: 150px; margin-top: 10px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Blog</button>
    </form>
</div>
@endsection
