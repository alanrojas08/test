<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // Validaciones
        $request->validate([
            'title' => 'required|min:4|max:20',
            'description' => 'required|min:6|max:200',
            'pages' => 'required|numeric|min:10|max:1000',
            'price' => 'required|numeric|min:1'
        ]);

        $book = new Book();
        $book->fill($request->all());
        $book->save();

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    public function edit(Book $book) 
    {
        return view('books.edit', ['book' => $book]);
    }
}
