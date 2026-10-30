<!DOCTYPE html>
<html>
<head>
    <title>My Reading List</title>
</head>
<body>

    <h1>My Reading List</h1>

    <a href="{{ route('books.create') }}">Add a New Book</a>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if($books->isEmpty())
        <p>No books yet. Start adding some!</p>
    @else
        @foreach($books as $book)
            <div>
                <h3>{{ $book->title }}</h3>
                <p>Author: {{ $book->author }}</p>
                <p>Status: {{ $book->status }}</p>
            </div>
        @endforeach
    @endif

</body>
</html>