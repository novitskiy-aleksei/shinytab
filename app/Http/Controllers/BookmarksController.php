<?php

namespace App\Http\Controllers;

use App\Bookmark;
use App\Http\Requests\BookmarkRequest;
use Auth;
use Illuminate\Http\Request;

class BookmarksController extends Controller
{
    /**
     * Create a new bookmark form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bookmarks.create', [
            'bookmark' => new Bookmark()
        ]);
    }

    /**
     * Process creating and saving new bookmark
     *
     * @param BookmarkRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BookmarkRequest $request)
    {
        $bookmark = new Bookmark( $request->only('name', 'url') );
        Auth::user()->bookmarks()->save($bookmark);

        return redirect('/');
    }

    /**
     * Edit existing bookmark form
     *
     * @param Bookmark $bookmark
     * @return \Illuminate\View\View
     */
    public function edit(Bookmark $bookmark)
    {
        return view('bookmarks.edit', compact('bookmark'));
    }

    /**
     * Process updating bookmark
     *
     * @param Bookmark $bookmark
     * @param BookmarkRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Bookmark $bookmark, BookmarkRequest $request)
    {
        $bookmark->update( $request->all() );

        return redirect('/');
    }

    /**
     * Remove provided bookmark
     *
     * @param Bookmark $bookmark
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Bookmark $bookmark)
    {
        $bookmark->delete();

        return redirect('/');
    }
}
