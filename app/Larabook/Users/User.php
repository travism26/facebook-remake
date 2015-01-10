<?php namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;
use Eloquent, Hash;
use Laracasts\Presenter\PresentableTrait;


class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait, EventGenerator, PresentableTrait, FollowableTrait;


    protected $fillable = ['username', 'email', 'password'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * path to the user presenter.
     * @var string
     */
    protected $presenter = 'Larabook\Users\UserPresenter';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * all password should be hashed
     *
     * @param $password
     *
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * the user has many status'
     * @return mixed
     */
    public function statuses()
    {
        return $this->hasMany('Larabook\Statuses\Status')->latest();
    }

    /**
     * register a new user
     *
     * @param $username
     * @param $email
     * @param $password
     * @return static $user
     */
    public static function register($username, $email, $password)
    {
        $user = new static(compact('username', 'email', 'password'));

        //raise an event send an email or update reporting.

        $user->raise(new UserRegistered($user));

        return $user;
    }


    /**
     * this will return the gravatar link, following DRY rules,
     * I may remove this function and place it else where.
     * @return string
     */
    public function gravatarLink()
    {
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{$email}?s=30";
    }

    /**
     * determin is the given user is the currently logged
     * in user.
     * @param User $user
     * @return bool
     */
    public function is($user)
    {
        if (is_null($user)) return false;

        return $this->username == $user->username;
    }
/*
    public function follow($user)
    {
        $this->follows[] = $user;
        return $user->follows()->attach($userIdToFollow);
    }
 */
}
