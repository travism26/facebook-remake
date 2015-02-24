<?php

use Larabook\Forms\CommentForm;
use Larabook\Statuses\Comment;
use Larabook\Statuses\LeaveCommentOnStatusCommand;

class CommentsController extends \BaseController {

    /**
     * @var CommentForm
     */
    private $commentForm;

    /**
     * @param CommentForm $commentForm
     */
    public function __construct(CommentForm $commentForm)
    {
        $this->commentForm = $commentForm;
    }

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
        //validate the input
        $this->commentForm->validate($input);
        //execute the command, leave a comment on a status
        $this->execute(LeaveCommentOnStatusCommand::class, $input);

        return Redirect::back();
        //go back
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        if (Auth::user()->id !== $comment->user_id)
        {
            Flash::error('You Do Not have permission to edit this Comment');
            return Redirect::to('statuses');
        } else
        {
            return View::make('statuses.comment.edit')->withComment($comment);
        }
    }

    public function update($id)
    {
        $status = Comment::findOrFail($id);
        $input = Input::get('comment');
        //$this->commentForm->validate($input);
        $status->body = $input;

        $status->save();

        return Redirect::to('statuses');
    }

}