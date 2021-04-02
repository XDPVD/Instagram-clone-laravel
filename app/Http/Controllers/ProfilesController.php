<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfilesController extends Controller
{
    //
    public function index($user){
        #dd($user);
        $user = User::findOrFail($user);
        #var_dump($user);
        return view('profiles.index',
            [
                'user' => $user,
          ]
        );
    }
}
