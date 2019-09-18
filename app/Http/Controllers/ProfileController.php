<?php

namespace App\Http\Controllers;

use App\User;

class ProfileController extends Controller
{
    public function show($user)
    {
        $user = User::findOrFail($user);

        return view('home', [
            'user' => $user,
        ]);
    }
}
