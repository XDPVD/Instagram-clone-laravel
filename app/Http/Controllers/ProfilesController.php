<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfilesController extends Controller
{
    //
    public function index($user){
        #dd($user);
        $user = User::find($user);
        #var_dump($user);
        return view('home',
            [
                'user' => $user,
          ]
        );
    }
}
