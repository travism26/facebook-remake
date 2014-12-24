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
    public function save(User $user){
        return $user->save();
    }

    /**
     * get a paginated list of all the users
     * @param int $howMany
     * @return mixed
     */
    public function getPaginated($howMany = 100)
    {
        return User::simplePaginate($howMany);
    }
} 