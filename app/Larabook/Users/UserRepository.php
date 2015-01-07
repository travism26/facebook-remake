<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-12
 * Time: 6:11 PM
 */

namespace Larabook\Users;


class UserRepository {


    /**
     * Persist a user
     *
     * @param User $user
     * @return mixed
     */
    public function save(User $user)
    {
        return $user->save();
    }

    /**
     * get a paginated list of all the users
     * @param int $howMany
     * @return mixed
     */
    public function getPaginated($howMany = 25)
    {
        return User::orderBy('username', 'asc')->Paginate($howMany);
    }

    /**
     * find the user with the passed in username
     * @param $username
     * @return mixed
     */
    public function findByUsername($username)
    {
        return User::with(['statuses' => function ($query)
        {
            $query->latest();
        }])->whereUsername($username)->first();
    }

    /**
     * find a user by their id
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return User::findOrFail($id);
    }

    /**
     * follow a user
     * @param $userIdToFollow
     * @param User $user
     * @return mixed
     */
    public function follow($userIdToFollow, User $user)
    {
        return $user->follows()->attach($userIdToFollow);
        //$user->follow($userIdToFollow);
    }

    /**
     * Unfollow a larabook user
     * @param $userIdToUnFollow
     * @param User $user
     * @internal param $userIdToFollow
     * @return mixed
     */
    public function unfollow($userIdToUnFollow, User $user)
    {
        return $user->follows()->detach($userIdToUnFollow);
    }
} 