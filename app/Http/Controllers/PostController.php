<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
	
	class PostController extends Controller
{
	public function show()
		{
			$posts = DB::table('postssss')->get();
			return view('post.show', ['postssss' => $posts]);
		}
	}
