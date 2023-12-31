<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Book;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function index() {
        return Inertia::render('index',[
            'books'=>Book::all()->map(function($book) {
                return [
                    'bookId'=>$book->id,
                    'title'=>$book->title,
                    'author'=>$book->author,
                ];
            })
        ]);
    }

    public function create() {
        return inertia::render('create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title'=>'required|max:255',
            'author'=>'required',
        ]);

        Book::create($validated);

        return Redirect::route('books.index')->with('message','Book created successfully');

    }


    public function edit(Book $book) {
        return Inertia::render('edit',[
            'book'=>$book
        ]);

    }
    
    public function update(Request $request, Book $book){
        $validated = $request->validate([
            'title'=>'required|max:255',
            'author'=>'required',
        ]);

        $book->update($validated);
        
        return Redirect::route('books.index')->with('message','Book updated successfully');;
    }

    public function destroy(Book $book) {
        //$book = Book::findOrFail($id);
        $book->delete();
        return Redirect::route('books.index')->with('message','Book deleted successfully');;
    }
}
