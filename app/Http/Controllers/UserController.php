<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show1($id)
    {
        $user = [
            1 => 'текст 1',
            2 => 'текст 2',
            3 => 'текст 3',
            4 => 'текст 4',
            5 => 'текст 5',
        ];

        return $user[$id];
    }
}


