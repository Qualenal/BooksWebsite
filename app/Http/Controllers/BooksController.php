<?php

namespace App\Http\Controllers;

use App\Book;

use App\Http\Requests;
use App\Http\Requests\BookRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Book::modern()->orderBy('title','asc')->get();
        return view('books.index', compact('books'));
    }

    public function show($id){
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BookRequest $request)
    {
        Book::create($request->all());
        return redirect('books');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }

    public function update($id, BookRequest $request)
    {
        $book = Book::findOrFail($id);

        $book->update($request->all());

        return redirect('books');
    }
}
