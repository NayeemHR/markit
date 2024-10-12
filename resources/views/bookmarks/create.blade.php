@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Bookmark</h1>

    <form action="{{ route('bookmarks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" name="url" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
