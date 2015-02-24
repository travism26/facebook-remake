<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-16
 * Time: 6:21 PM
 */

namespace Larabook\Statuses;


use Larabook\Users\User;

class StatusRepository {

    public function getAllForUser(User $user)
    {
        //return Status::all();
        //return User::find($user->id)->statuses->with('user')->latest();

        /*
         * The below return statement works however there is a
         * bug in codeception where the tests stay red if you
         * dont call the User::find function...
         */
        return $user->statuses()->with('user')->latest()->get();
    }
    /**
     * @param Status $status
     * @param $userId
     * @return mixed
     */
    public function save(Status $status, $userId)
    {
        return User::findOrFail($userId)
            ->statuses()
            ->save($status);

        //$status->save();
        //Auth::user()->statuses()-save($status);


    }

    /**
     * get the feed for the user
     * @param User $user
     * @return mixed
     */
    public function getFeedForUser(User $user)
    {
        $userIds = $user->followedUsers()->lists('followed_id');
        $userIds[] = $user->id;

        return Status::with('comments')->whereIn('user_id', $userIds)->latest()->get();

    }

    public function leaveComment($userId, $statusId, $body)
    {
        $comment = Comment::leave($body, $statusId);

        User::findorFail($userId)->comments()->save($comment);

        return $comment;
    }

    public function editComment($comment)
    {

    }
} 