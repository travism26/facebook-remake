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
} 