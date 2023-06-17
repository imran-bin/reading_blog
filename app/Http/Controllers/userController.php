<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    function index()
    {
        $users=User::all();
        

        return view('userList', compact('users'));
    }
}
