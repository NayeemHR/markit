@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Bookmarks</h1>
    <a href="{{ route('bookmarks.create') }}" class="btn btn-primary">Add Bookmark</a>

    <ul>
        @foreach($bookmarks as $bookmark)
            <li>
                <a href="{{ $bookmark->url }}" target="_blank">{{ $bookmark->title }}</a>
                <a href="{{ route('bookmarks.edit', $bookmark->id) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('bookmarks.destroy', $bookmark->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
