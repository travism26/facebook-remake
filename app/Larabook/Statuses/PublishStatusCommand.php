<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-16
 * Time: 6:01 PM
 */

namespace Larabook\Statuses;


class PublishStatusCommand {

    public $body;
    public $userId;

    public function __construct($body, $userId)
    {
        $this->body = $body;
        $this->userId = $userId;
    }

} 