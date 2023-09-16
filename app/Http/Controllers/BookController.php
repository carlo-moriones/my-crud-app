<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{
    public function create() {
        return inertia::render('create');
    }
}
