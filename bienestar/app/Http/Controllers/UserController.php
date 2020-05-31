<?php

namespace DevHealth\Http\Controllers;

use DevHealth\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DevHealth\Repositories\UserRepository;
use DevHealth\User;

class UserController extends Controller
{

    public function show($id)
    {
        $user = User::find($id);

        return view('user.profile', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
    	
    }
}
