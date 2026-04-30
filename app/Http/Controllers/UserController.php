<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show1()
    {
     $users = DB::table('userssss')->where('age', '=', 30)->orWhere(function($query){
        $query->where('salary', '=', 500)->where('id', '>', 4);})->get();
	 return view('post.show1', ['userssss' => $users]);
    }
    
}


