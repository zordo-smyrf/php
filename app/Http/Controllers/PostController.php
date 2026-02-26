<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
   public function show()
		{
			return view('test', ['name' => '1', 'surname' => '2']);
		}

}


