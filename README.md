# My Reading List

A simple Laravel web application to manage books and track reading progress.

## Features

- View all books.
- Add books with title, author, and reading status.
- Edit existing book details.
- Delete books with a confirmation message.
- Filter books by reading status.
- Form validation for required fields.
- No login required.

## Technologies Used

- PHP
- Laravel
- SQLite
- HTML
- Blade Templates
- Git and GitHub

## Installation and Setup

### Prerequisites
- PHP
- Composer
- Laravel
- SQLite

### Steps

1. Clone the repository:

   ```bash
   git clone YOUR_GITHUB_REPOSITORY_URL
   ```

2. Navigate to the project folder:

   ```bash
   cd reading-list
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Create the environment file:

   ```powershell
   Copy-Item .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Configure SQLite in the `.env` file:

   ```env
   DB_CONNECTION=sqlite
   ```

7. Create the SQLite database if it does not exist:

   ```powershell
   New-Item database/database.sqlite -ItemType File
   ```

8. Run database migrations:

   ```bash
   php artisan migrate
   ```

9. Start the development server:

   ```bash
   php artisan serve
   ```

10. Open the application:

    http://127.0.0.1:8000/books

## How to Use

1. Click **Add a New Book**.
2. Enter the book title and author.
3. Select a reading status:
   - To Read
   - Reading
   - Finished
4. Click **Add Book** to save it.
5. Use **Edit** to update book information.
6. Use **Delete** to remove a book after confirmation.
7. Use the status filter to view books based on reading progress.

## AI Usage

ChatGPT was used during development for:
- Understanding Laravel concepts and MVC architecture.
- Guidance with routes, controllers, and Blade templates.
- Troubleshooting errors.
- Understanding form validation and database operations.

The suggested code was reviewed, adapted, and tested during development.

## Project Purpose

This project was developed as part of a Laravel web development assignment to practise CRUD operations, database migrations, routing, controllers, Blade templates, form validation, and Git version control.