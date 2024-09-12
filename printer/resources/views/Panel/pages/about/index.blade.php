@extends('Panel.layouts.app')

@section('content')
<div class="container">
    <h1>Abouts</h1>
    <a href="{{ route('about.create') }}" class="btn btn-primary">Add New About</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <td>{{ $about->name }}</td>
                <td>{{ Str::limit($about->content, 50) }}</td>
                <td>
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" alt="Image" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
