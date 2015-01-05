<?php

use Larabook\Users\FollowUserCommand;

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
        $input  = array_add(Input::get(), 'userId', Auth::id());
        $this->execute(FollowUserCommand::class, $input);

        Flash::success('You are now following this user.');
        return Redirect::back();
	}


	/**
	 * This is when you want to unfollow a user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
