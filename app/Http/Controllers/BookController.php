<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{
    public function create() {
        return inertia::render('create');
    }

    public function add(Request $request) {
        $valited = $request->validate([
            'title'=>'required|max:255',
            'author'=>'required',
        ]);
    }
}
