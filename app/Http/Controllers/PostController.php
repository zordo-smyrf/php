<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
	
	class PostController extends Controller
{
	public function show()
	{
			$posts = DB::table('usersss')->get();
			return view('usersss.index', compact('users'));

	}
}
