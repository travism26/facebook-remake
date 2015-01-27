<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-01-26
 * Time: 11:49 PM
 */

namespace Larabook\api;


class githubWrapper {

    protected $username;
    protected $userData;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function getInstance()
    {

    }

    /*
     * decided follow the singleton pattern for this
     * API wrapper.
     */

    public function getRepo()
    {

    }
}