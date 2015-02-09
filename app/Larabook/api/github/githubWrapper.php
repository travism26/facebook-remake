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

    private $baseUrl;
    private $avatar_url;
    private $html_url;
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


    public function getRepo()
    {

    }

    private function setData($username)
    {
        $this->html_url = "https://github.com/".$username;
    }

    /**
     * @return mixed
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * @return mixed
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @return mixed
     */
    public function getPublicGists()
    {
        return $this->public_gists;
    }

    /**
     * @return mixed
     */
    public function getPublicRepos()
    {
        return $this->public_repos;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @return mixed
     */
    public function getHireable()
    {
        return $this->hireable;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getReceivedEventsUrl()
    {
        return $this->received_events_url;
    }

    /**
     * @return mixed
     */
    public function getReposUrl()
    {
        return $this->repos_url;
    }

    /**
     * @return mixed
     */
    public function getOrganizationsUrl()
    {
        return $this->organizations_url;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionsUrl()
    {
        return $this->subscriptions_url;
    }

    /**
     * @return mixed
     */
    public function getFollowersUrl()
    {
        return $this->followers_url;
    }

    /**
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatar_url;
    }


    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

}