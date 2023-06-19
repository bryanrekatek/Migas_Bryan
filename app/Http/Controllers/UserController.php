<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('home', compact('users'));
    }
    public function show($id){
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
}
