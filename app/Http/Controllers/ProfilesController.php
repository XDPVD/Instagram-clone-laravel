<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfilesController extends Controller
{
    //
    public function index(User $user){
        #dd($user);
        #$user = User::findOrFail($user);
        #var_dump($user);
        
        return view('profiles.index',
            [
                'user' => $user,
          ]
        );
    }

    public function edit(User $user)
    {
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        auth()->user()->profile()->update($data);
        return redirect("/profile/{$user->id}");
    }

}
