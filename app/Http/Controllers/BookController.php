<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
{
    $status = $request->query('status');

    $books = Book::when($status, function ($query) use ($status) {
        $query->where('status', $status);
    })->get();

    return view('books.index', compact('books', 'status'));
}

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'status' => 'required|in:to-read,reading,finished',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')
            ->with('success', 'Book added successfully!');
    }
    public function edit(Book $book)
{
    return view('books.edit', compact('book'));
}

public function update(Request $request, Book $book)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'status' => 'required|in:to-read,reading,finished',
    ]);

    $book->update($validated);

    return redirect()->route('books.index')
        ->with('success', 'Book updated successfully!');
    }
    public function destroy(Book $book)
{
    $book->delete();

    return redirect()->route('books.index')
        ->with('success', 'Book deleted successfully!');
}
}