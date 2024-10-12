<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = auth()->user()->bookmarks;
        return view('bookmarks.index', compact('bookmarks'));
    }

    public function create()
    {
        return view('bookmarks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url',
        ]);

        auth()->user()->bookmarks()->create($request->all());

        return redirect()->route('bookmarks.index')->with('success', 'Bookmark added!');
    }

    public function edit(Bookmark $bookmark)
    {
        return view('bookmarks.edit', compact('bookmark'));
    }

    public function update(Request $request, Bookmark $bookmark)
    {
        $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url',
        ]);

        $bookmark->update($request->all());

        return redirect()->route('bookmarks.index')->with('success', 'Bookmark updated!');
    }

    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();

        return redirect()->route('bookmarks.index')->with('success', 'Bookmark deleted!');
    }

}
