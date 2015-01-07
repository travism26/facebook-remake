<?php namespace Larabook\Users;

class UnfollowUserCommand {

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userIdToUnfollow;

    /**
     * @param string userId
     * @param string UserIdToUnfollow
     */
    public function __construct($userId, $userIdToUnfollow)
    {
        $this->userId = $userId;
        $this->userIdToUnfollow = $userIdToUnfollow;
    }

}