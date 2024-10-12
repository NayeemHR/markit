@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Bookmark</h1>

    <form action="{{ route('bookmarks.update', $bookmark->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $bookmark->title }}" required>
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" name="url" class="form-control" value="{{ $bookmark->url }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
