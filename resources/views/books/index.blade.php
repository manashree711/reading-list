
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reading List</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #FAF7F2;
            color: #554B50;
            min-height: 100vh;
            padding: 45px 20px;
        }

        .container {
            max-width: 1050px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 35px;
        }

        .eyebrow {
            color: #B48A9A;
            font-size: 12px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(32px, 5vw, 46px);
            font-weight: 600;
            color: #594B52;
        }

        .subtitle {
            color: #988B8C;
            margin-top: 9px;
            font-size: 14px;
        }

        .add-btn {
            background: #F1DCE2;
            color: #795765;
            text-decoration: none;
            padding: 13px 22px;
            border-radius: 12px;
            font-weight: 700;
            transition: 0.2s;
            border: 1px solid #E9CDD6;
        }

        .add-btn:hover {
         background: #DDE9DC;
         color: #526B55;
        transform: translateY(-2px);
      }

        .summary {
         background: linear-gradient(120deg, #F3E6EC, #E9E6F5, #E2EDDF);
        border: 1px solid #E7DCEB;
        border-radius: 18px;
        padding: 25px;
        margin-bottom: 30px;
       }

        .summary-label {
            color: #92758D;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .summary-number {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            color: #68566A;
            margin-top: 8px;
        }

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .filter-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: #594B52;
        }

        .filter-form {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        select {
            background: #FFFFFF;
            color: #665961;
            border: 1px solid #E5DCE0;
            padding: 11px 14px;
            border-radius: 9px;
            outline: none;
        }

        button {
            cursor: pointer;
            border: none;
            font-family: inherit;
        }

        .filter-btn {
            background: #DFE9F3;
            color: #536E88;
            padding: 11px 17px;
            border-radius: 9px;
            font-weight: 600;
        }

        .filter-btn:hover {
            background: #CDDFEF;
        }

        .clear-link {
            color: #A17E91;
            text-decoration: none;
            font-size: 13px;
        }

        .success {
            background: #E4F0E5;
            color: #527458;
            border: 1px solid #D0E4D2;
            padding: 14px 18px;
            border-radius: 10px;
            margin-bottom: 22px;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .book-card {
            background: #FFFFFF;
            border: 1px solid #EEE6E3;
            border-radius: 16px;
            padding: 23px;
            box-shadow: 0 5px 18px rgba(100, 75, 85, 0.045);
            transition: 0.2s;
        }

        .book-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(100, 75, 85, 0.09);
            border-color: #E5D2DF;
        }

        .book-icon {
            font-size: 25px;
            margin-bottom: 16px;
        }

        .book-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #594B52;
            margin-bottom: 8px;
            overflow-wrap: anywhere;
        }

        .author {
            color: #988B8C;
            font-size: 14px;
            margin-bottom: 19px;
        }

        .status-badge {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .status-to-read {
            background: #EAE1F6;
            color: #79628F;
        }

        .status-reading {
            background: #DFEBF7;
            color: #547795;
        }

        .status-finished {
            background: #E0EDE1;
            color: #54765A;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 15px;
            border-top: 1px solid #F0E9E8;
            padding-top: 16px;
        }

        .edit-btn {
            color: #98758F;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .delete-btn {
            background: transparent;
            color: #C27E89;
            font-size: 14px;
            font-weight: 600;
        }

        .empty-state {
            text-align: center;
            padding: 65px 20px;
            background: #FFFFFF;
            border: 1px dashed #E3D5E0;
            border-radius: 18px;
        }

        .empty-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .empty-state h2 {
            font-family: 'Playfair Display', serif;
        }

        .empty-state p {
            color: #988B8C;
            margin-top: 10px;
        }

        @media (max-width: 600px) {
            body {
                padding: 30px 16px;
            }

            .header {
                align-items: flex-start;
            }

            .filter-section {
                align-items: flex-start;
                flex-direction: column;
            }

            .filter-form {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <header class="header">
        <div>
            <p class="eyebrow">✦ YOUR PERSONAL READING CORNER</p>
            <h1>My Reading List 📚</h1>
            <p class="subtitle">A little space for all the stories you love.</p>
        </div>

        <a href="{{ route('books.create') }}" class="add-btn">
            + Add a Book
        </a>
    </header>

    <section class="summary">
        <p class="summary-label">Your collection</p>
        <p class="summary-number">{{ $books->count() }}</p>
        <p class="subtitle">
            {{ $status ? 'Books in this category' : 'Books in your reading list' }}
        </p>
    </section>

    @if(session('success'))
        <div class="success">
            ✦ {{ session('success') }}
        </div>
    @endif

    <section class="filter-section">
        <h2>Your Books</h2>

        <form action="{{ route('books.index') }}" method="GET" class="filter-form">

            <select name="status">
                <option value="">All Books</option>

                <option value="to-read" {{ ($status ?? '') == 'to-read' ? 'selected' : '' }}>
                    To Read
                </option>

                <option value="reading" {{ ($status ?? '') == 'reading' ? 'selected' : '' }}>
                    Reading
                </option>

                <option value="finished" {{ ($status ?? '') == 'finished' ? 'selected' : '' }}>
                    Finished
                </option>
            </select>

            <button type="submit" class="filter-btn">Filter</button>

            <a href="{{ route('books.index') }}" class="clear-link">
                Clear filter
            </a>
        </form>
    </section>

    @if($books->isEmpty())

        <div class="empty-state">
            <div class="empty-icon">📖</div>
            <h2>No books found</h2>
            <p>Looks like this shelf is waiting for a new story!</p>
        </div>

    @else

        <div class="book-grid">

            @foreach($books as $book)

                <div class="book-card">

                    <div class="book-icon">📕</div>

                    <h3>{{ $book->title }}</h3>

                    <p class="author">
                        By {{ $book->author }}
                    </p>

                    <span class="status-badge status-{{ $book->status }}">
                        {{ ucfirst(str_replace('-', ' ', $book->status)) }}
                    </span>

                    <div class="actions">

                        <a href="{{ route('books.edit', $book->id) }}" class="edit-btn">
                            Edit
                        </a>

                        <form action="{{ route('books.destroy', $book->id) }}"
                              method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this book?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-btn">
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>

</body>
</html>
