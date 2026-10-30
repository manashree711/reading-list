
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book | My Reading List</title>

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
            max-width: 650px;
            margin: auto;
        }

        .back-link {
            display: inline-block;
            color: #98758F;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 28px;
        }

        .back-link:hover {
            color: #6F5269;
        }

        .form-card {
            background: #FFFFFF;
            border: 1px solid #EEE6E3;
            border-radius: 20px;
            padding: 38px;
            box-shadow: 0 8px 28px rgba(100, 75, 85, 0.06);
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
            font-size: 36px;
            color: #594B52;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #988B8C;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 23px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 9px;
            color: #665961;
        }

        input, select {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid #E5DCE0;
            border-radius: 10px;
            background: #FCFAF9;
            color: #554B50;
            font-family: inherit;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        input:focus, select:focus {
            border-color: #C8B6D9;
            box-shadow: 0 0 0 3px #F0EAF6;
        }

        input::placeholder {
            color: #B7AAAE;
        }

        .error {
            color: #C27E89;
            font-size: 13px;
            margin-top: 7px;
        }

        .submit-btn {
            width: 100%;
            background: #F1DCE2;
            color: #795765;
            padding: 14px;
            border-radius: 11px;
            font-family: inherit;
            font-size: 15px;
            font-weight: 700;
            border: 1px solid #E9CDD6;
            cursor: pointer;
            transition: 0.2s;
        }

        .submit-btn:hover {
            background: #DDE9DC;
            color: #526B55;
        }

        .decoration {
            text-align: center;
            margin-top: 25px;
            color: #B9A5B5;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            body {
                padding: 25px 15px;
            }

            .form-card {
                padding: 25px 20px;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <a href="{{ route('books.index') }}" class="back-link">
        ← Back to Reading List
    </a>

    <div class="form-card">

        <p class="eyebrow">✦ A new story begins</p>

        <h1>Add a New Book 📖</h1>

        <p class="subtitle">
            Every book has a story. Add yours to the collection.
        </p>

        <form action="{{ route('books.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Book Title</label>

                <input
                    type="text"
                    name="title"
                    placeholder="Enter the book title"
                    value="{{ old('title') }}"
                >

                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Author</label>

                <input
                    type="text"
                    name="author"
                    placeholder="Enter the author's name"
                    value="{{ old('author') }}"
                >

                @error('author')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Reading Status</label>

                <select name="status">
                    <option value="to-read" {{ old('status', 'to-read') == 'to-read' ? 'selected' : '' }}>
                        To Read
                    </option>

                    <option value="reading" {{ old('status') == 'reading' ? 'selected' : '' }}>
                        Currently Reading
                    </option>

                    <option value="finished" {{ old('status') == 'finished' ? 'selected' : '' }}>
                        Finished
                    </option>
                </select>

                @error('status')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="submit-btn">
                + Add to My Reading List
            </button>

        </form>

        <p class="decoration">✧ Happy reading! ✧</p>

    </div>

</div>

</body>
</html>
