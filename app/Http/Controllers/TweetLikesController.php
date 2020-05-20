<?php

namespace App\Http\Controllers;

use App\Notifications\LikedTweet;
use App\Tweet;

class TweetLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
    	$tweet->toggleLike(current_user());

        $tweet->user->notify(new LikedTweet(current_user()->name));

    	return back();
    }

    public function destroy(Tweet $tweet)
    {
    	$tweet->toggleDisLike(current_user());

        $tweet->user->notify(new LikedTweet(current_user()->name));

    	return back();
    }

    public function show()
    {
        $notification = current_user()->unreadNotifications;

        $notification->markAsRead();

        return view('notifications',
            [
                'notifications' => $notification
            ]
        );
    }
}
