<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
    	return view('profiles.show', [
            'user' => $user,
            'tweets' => $user
                ->tweets()
                ->withLikes()
                ->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
    	// abort_if($user->isNot(current_user()), 403); a way to impliment authorization
    	
    	return view('profiles.edit', compact('user'));
    }


    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
            ],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'cover' => ['file'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user)
            ],
            'description' => 'string',
            'password' => [
                'string',
                'required',
                'min:8',
                'max:255',
                'confirmed'
            ],
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        if (request('cover')) {
            $attributes['cover'] = request('cover')->store('covers');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
    

