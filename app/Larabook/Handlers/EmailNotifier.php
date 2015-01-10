<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-01-10
 * Time: 12:46 PM
 */

namespace Larabook\Handlers;


use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;

class EmailNotifier extends EventListener {

    public function whenUserHasRegistered(UserRegistered $event)
    {

    }
}