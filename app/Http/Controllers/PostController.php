<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
	
	class PostController extends Controller
{
	public function index()
	{
			$userssss = DB::table('userssss')->get();
			DB::enableQueryLog();
			DB::table('usersss')->where('id', '>', 1)->get();
			dump(DB::getQueryLog());


	}
}
