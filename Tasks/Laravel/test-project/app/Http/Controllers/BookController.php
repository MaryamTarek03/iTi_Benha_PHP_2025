<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = $request->all();
        Book::create($book);
        return to_route('books.index')->with('success', 'Book added successfully.');
    }

    public function search()
    {
        return view('books.search');
    }

    public function find(Request $request)
    {
        $query = $request->input('query');
        $books = Book::all()->filter(function ($book) use ($query) {
            return stripos($book->title, $query) !== false || stripos($book->author, $query) !== false;
        });
        return view('books.search_results', compact('books', 'query'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', ['book' => $book]);
    }
}
