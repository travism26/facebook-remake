<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-01-07
 * Time: 5:22 PM
 */

namespace Larabook\Users;


trait FollowableTrait {
    /**
     * get the list of the users the current user is follows.
     * @return mixed
     */
    public function followedUsers()
    {
        return $this->belongsToMany(static::class, 'follows', 'follower_id', 'followed_id')
            ->withTimestamps();
    }


    /**
     * get the list of the users who follow the current user
     * @return mixed
     */
    public function followers()
    {
        return $this->belongsToMany(static::class, 'follows', 'followed_id', 'follower_id')
            ->withTimestamps();
    }

    /**
     * determine if current user follows another user
     * @param User $otherUser
     * @return bool
     */
    public function isFollowedBy(User $otherUser)
    {
        $idsWhoOtherUserFollows = $otherUser->followedUsers()->lists('followed_id');

        return in_array($this->id, $idsWhoOtherUserFollows);
    }
} 