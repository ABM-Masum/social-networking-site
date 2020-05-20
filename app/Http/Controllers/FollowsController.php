<?php

namespace App\Http\Controllers;

use App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
    	current_user()->toggleFollow($user);
    	
    	if (current_user()->following($user)) {

    		return back()->with('alert_follow', 'You are following '.$user->name);
    	}
    		return back()->with('alert_unfollow', 'you are not following '.$user->name);

    }
}
