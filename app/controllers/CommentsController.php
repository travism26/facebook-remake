<?php

use Larabook\Statuses\LeaveCommentOnStatusCommand;

class CommentsController extends \BaseController {
	/**
	 * leave a new comment
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
		//fetch the input
		$input = array_add(Input::get(), 'user_id', Auth::id());
		//execute the command, leave a comment on a status
		$this->execute(LeaveCommentOnStatusCommand::class, $input);

		return Redirect::back();
		//go back
	}

}