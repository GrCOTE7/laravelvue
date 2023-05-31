<?php
namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function __invoke(Request $request)
	{
		return new UserCollection(
			resource: User::all()
		);
	}
}
