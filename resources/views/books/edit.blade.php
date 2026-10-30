
<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>

    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Book Title:</label>
        <input type="text" name="title"
               value="{{ old('title', $book->title) }}">
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Author:</label>
        <input type="text" name="author"
               value="{{ old('author', $book->author) }}">
        @error('author')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Status:</label>
        <select name="status">
            <option value="to-read"
                {{ old('status', $book->status) == 'to-read' ? 'selected' : '' }}>
                To Read
            </option>

            <option value="reading"
                {{ old('status', $book->status) == 'reading' ? 'selected' : '' }}>
                Reading
            </option>

            <option value="finished"
                {{ old('status', $book->status) == 'finished' ? 'selected' : '' }}>
                Finished
            </option>
        </select>

        @error('status')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Update Book</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Back to Reading List</a>

</body>
</html>
