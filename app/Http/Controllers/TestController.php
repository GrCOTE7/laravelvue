<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
	public function __invoke(Request $request)
	{
		$bs = $this->getBooks();
		$us = $this->getUsers();

		return view('gc7test.test', [
			'users' => $us,
			'books' => $bs,
		]);
	}

	private function getBooks()
	{
		return Book::all();
	}

	private function getUsers()
	{
		return User::all();
	}
}
