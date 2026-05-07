<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show1()
    {
     $users = DB::table('userssss')->where('email','=', 'Jonhggl3gmail.com' )->get();
	 return view('post.show1', ['userssss' => $users]);
    }
    
}


