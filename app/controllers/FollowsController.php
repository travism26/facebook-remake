<?php

use Larabook\Users\FollowUserCommand;
use Larabook\Users\UnfollowUserCommand;

class FollowsController extends \BaseController {


    /**
     * this is when you want to follow a user
     *
     * @return Response
     */
    public function store()
    {
        // id to the user to follow
        // id of the auth user.
        $input = array_add(Input::get(), 'userId', Auth::id());
        $this->execute(FollowUserCommand::class, $input);

        Flash::success('You are now following this user.');

        return Redirect::back();
    }


    /**
     * This is when you want to unfollow a user.
     *
     * @param $userIdToUnfollow
     * @internal param int $id
     * @return Response
     */
    public function destroy($userIdToUnfollow)
    {
        /*Auth::user()->follows()->detach($idOfUserToUnfollow);
        return Redirect::back();*/

        $input = array_add(Input::get(), 'userId', Auth::id());
        //dd($input);
        $this->execute(UnfollowUserCommand::class, $input);

        Flash::success('You have now unfollowed this user');

        return Redirect::back();

    }


}
