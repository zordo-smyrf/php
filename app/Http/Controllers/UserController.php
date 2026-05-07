<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show1()
    {
     $users = DB::table('userssss')->where('salary', '=', 500)->orWhere(function($query){
        $query->orwhere('age', '=', 20)->orwhere('age', '=', 30);})->get();
	 return view('post.show1', ['userssss' => $users]);
    }
    
}


