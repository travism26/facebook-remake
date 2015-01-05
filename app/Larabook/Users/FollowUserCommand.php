<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-01-04
 * Time: 5:44 PM
 */

namespace Larabook\Users;


class FollowUserCommand {

    public $userId;

    public $userIdToFollow;

    function __construct($userId, $userIdToFollow)
    {
        $this->userId = $userId;
        $this->userIdToFollow = $userIdToFollow;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getUserIdToFollow()
    {
        return $this->userIdToFollow;
    }



} 