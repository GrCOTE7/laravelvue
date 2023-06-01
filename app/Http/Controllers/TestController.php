<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class TestController extends Controller
{
	public function __invoke(Request $request)
	{
		$bs = Book::all();

		echo count($bs) . ' livres:<br><br>';
		foreach ($bs as $b) {
			echo $b->title . ' - ' . $b->user_id . '<br>';
		}

		return view('test.test');
	}
}
