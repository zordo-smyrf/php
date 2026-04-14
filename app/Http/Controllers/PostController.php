<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
	
	class PostController extends Controller
{
	public function index()
	{
			$userssss = DB::table('userssss')->get();
			dump($userssss);

	}
}
