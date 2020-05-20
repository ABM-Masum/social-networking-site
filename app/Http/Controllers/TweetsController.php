<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetsController extends Controller
{
	public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
    
    public function store()
    {
    	$attributes = request()->validate([
            'body' => 'required|max:255',
            'file' => ['file']
        ]);

        if (request('file')) {
            $attributes['file'] = request('file')->store('files');

            Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'file' => $attributes['file']
            ]);
        }else{
            Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            ]);
        }

    	return redirect(route('home'))->with('alert_tweet', 'Created Successfully!');
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->Delete();

        return back();
    }

    public function edit(Tweet $tweet)
    {
        return view('tweets.edit', compact('tweet'));
    }

    public function update(Tweet $tweet)
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
            'file' => ['file']
        ]);

        if (request('file')) {
            $attributes['file'] = request('file')->store('files');
        }

        $tweet->update($attributes);

        return redirect(route('home'))->with('alert_tweet_update', 'Updated Successfully!');
    }
}