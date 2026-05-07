<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show1()
    {
     $users = DB::table('userssss')->where(function ($query){
        $query->whereBetween('age', [20, 30])->orWhereBetween('salary', [400, 800]);
    })->get();
	 return view('post.show1', ['userssss' => $users]);
    }
    
}


