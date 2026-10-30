
<!DOCTYPE html>
<html>
<head>
    <title>Add a Book</title>
</head>
<body>

    <h1>Add a New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label>Book Title:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Author:</label>
        <input type="text" name="author" value="{{ old('author') }}">
        @error('author')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Status:</label>
        <select name="status">
            <option value="to-read">To Read</option>
            <option value="reading">Reading</option>
            <option value="finished">Finished</option>
        </select>
        @error('status')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Add Book</button>
    </form>

    <br>

    <a href="{{ route('books.index') }}">Back to Reading List</a>

</body>
</html>
