<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-12
 * Time: 5:21 PM
 */

namespace Larabook\Registration;


class RegisterUserCommand {

    public $username;

    public $email;

    public $password;

    public function __construct($username, $email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
    }

} 