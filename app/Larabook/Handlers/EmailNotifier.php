<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-01-10
 * Time: 12:46 PM
 */

namespace Larabook\Handlers;


use Larabook\Mailers\UserMailer;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;

class EmailNotifier extends EventListener {

    /**
     * @var UserMailer
     */
    private $mailer;

    function __construct(UserMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function whenUserHasRegistered(UserRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }
}