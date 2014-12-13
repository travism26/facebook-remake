<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-13
 * Time: 3:12 PM
 */

namespace Larabook\Registration\Events;


use Larabook\Users\User;

class UserRegistered {

    public $user;

    /**
     * @param User $user
     */
    function __construct(User $user)
    {
        $this->user = $user;
    }


} 