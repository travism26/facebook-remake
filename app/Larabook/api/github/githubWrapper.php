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

    private $html_url;
    private $avatar_url;
    private $followers_url;
    private $subscriptions_url;
    private $organizations_url;
    private $repos_url;
    private $received_events_url;
    private $name;
    private $company;
    private $blog;
    private $location;
    private $email;
    private $hireable;
    private $bio;
    private $public_repos;
    private $public_gists;
    private $followers;
    private $following;

    public function __construct($username)
    {
        $this->username = $username;
        $this->setData($username);
    }

    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }




    /*
     * decided follow the singleton pattern for this
     * API wrapper.
     */

    public function getRepo()
    {

    }

    private function setData($username)
    {

    }
}