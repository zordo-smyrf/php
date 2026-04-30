<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show1()
    {
     $users = DB::table('userssss')->where('age', '!=', '30')->get();
	 return view('post.show1', ['userssss' => $users]);
    }
    
}


