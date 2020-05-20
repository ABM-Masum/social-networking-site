<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Likable
{
	public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function toggleDisLike(User $user)
    {   
        if($this->isDisLikedBy($user))
        {
         return $this->undoLikes($user);
        }
         return $this->dislike($user);
    }

    public function toggleLike(User $user)
    {   
        if($this->isLikedBy($user))
        {
         return $this->undoLikes($user);
        }
         return $this->like($user);
    }

    public function undoLikes(User $user)
    {
        return $this->likes()->delete(
            ['user_id' => $user->id]
        );
    }

    public function isDisLikedBy(User $user)
    {
    	return $this->isLikedBy($user, false);
    }

    public function isLikedBy(User $user, $liked = true)
    {
        // return $this->likes()->where('user_id', $user->id)->exists();
        // or
        return (bool) $user->likes
        ->where('tweet_id', $this->id)
        ->where('liked', $liked)
        ->count();
    }

    public function dislike($user = null) 
    {
        return $this->like($user, false);
    }

    public function like($user = null, $liked = true) 
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id()
            ],
            [
                'liked' => $liked
            ]
        );
    }

    public function likes() 
    {
    	return $this->hasMany(Like::class);
    }
} 