<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Book;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function create() {
        return inertia::render('create');
    }

    public function add(Request $request) {
        $validated = $request->validate([
            'title'=>'required|max:255',
            'author'=>'required',
        ]);

        Book::create($validated);

        return Redirect::route('books.index');
    }
}
