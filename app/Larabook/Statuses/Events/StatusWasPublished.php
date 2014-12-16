<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-16
 * Time: 6:17 PM
 */

namespace Larabook\Statuses\Events;


class StatusWasPublished {

    public $body;

    public function __construct($body)
    {
        $this->body = $body;
    }
} 