<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;


class BookController extends Controller
{
    public function index() {
        // $authors = Book::all();
        // return view('welcome', compact($authors, 'authors'));
        // $authors = Author::with('books')->first();
        // dd($authors->toArray());
    }
}
