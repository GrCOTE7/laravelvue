<?php
namespace App\Http\Controllers\Book;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksListController extends Controller
{
	/**
	 * Handle the incoming request.
	 */
	public function __invoke(Request $request)
	{
        $books=Book::all();
        return view('books.list', compact('books'));
	}
}
