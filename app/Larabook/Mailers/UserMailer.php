<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-01-10
 * Time: 1:10 PM
 */

namespace Larabook\Mailers;

use Larabook\Users\User;


class UserMailer extends Mailer {

    /**
     * @param User $user
     */
    public function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome to Larabook';
        $view = 'emails.registration.confirm';

        return $this->sendTo($user, $subject, $view);
    }
}