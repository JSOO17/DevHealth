<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\User;

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
