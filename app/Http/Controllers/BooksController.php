<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function index(){
        $books = Book::orderBy('title','asc')->get();
        return view('books.index', compact('books'));
    }

    public function show($id){
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
}
