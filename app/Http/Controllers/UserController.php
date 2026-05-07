<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show1()
    {
     $users = DB::table('userssss')->whereIn('id',[1,2,3,5] )->get();
	 return view('post.show1', ['userssss' => $users]);
    }
    
}


