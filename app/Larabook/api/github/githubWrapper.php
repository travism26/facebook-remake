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
        $this->setData();
    }


    public function getRepo()
    {
        $repo = $this->curlCall($this->repos_url);
        return $repo;
    }

    public function curlCall($url)
    {
        //$url = "https://api.github.com/users/" . $this->username;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));

        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        $responseObj = json_decode($resp);
        return $responseObj;
    }

    public function setData()
    {

        $url = "https://api.github.com/users/" . $this->username;
        $responseObj = $this->curlCall($url);
        // Close request to clear up some resources
        //curl_close($curl);
        //dd($responseObj);
        $this->html_url = $responseObj->{'html_url'};
        $this->avatar_url = $responseObj->{'avatar_url'};
        $this->baseUrl = $responseObj->{'url'};
        $this->followers_url = $responseObj->{'followers_url'};
        $this->subscriptions_url = $responseObj->{'subscriptions_url'};
        $this->organizations_url = $responseObj->{'organizations_url'};
        $this->repos_url = $responseObj->{'repos_url'};
        $this->received_events_url = $responseObj->{'received_events_url'};
        $this->name = $responseObj->{'name'};
        $this->company = $responseObj->{'company'};
        $this->blog = $responseObj->{'blog'};
        $this->location = $responseObj->{'location'};
        $this->email = $responseObj->{'email'};
        $this->hireable = $responseObj->{'hireable'};
        $this->bio = $responseObj->{'bio'};
        $this->public_repos = $responseObj->{'public_repos'};
        $this->public_gists = $responseObj->{'public_gists'};
        $this->followers = $responseObj->{'followers'};
        $this->following = $responseObj->{'following'};


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