<?php

use Larabook\Forms\PublicStatusForm;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;

class StatusesController extends \BaseController {

    /**
     * @var StatusRepository
     */
    protected $statusRepository;
    /**
     * @var PublishStatusForm
     */
    protected $publishStatusForm;

    /**
     * @param PublicStatusForm|PublishStatusForm $publishStatusForm
     * @param StatusRepository $statusRepository
     */
    function __construct(PublicStatusForm $publishStatusForm , StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
        $this->publishStatusForm = $publishStatusForm;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $statuses = $this->statusRepository->getFeedForUser(Auth::user());
		return View::make('statuses.index', compact('statuses'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
//        $input = Input::get();
//        $input['userId'] = Auth::id();

        $input = array_add(Input::get(), 'userId', Auth::id());
        $this->publishStatusForm->validate($input);
        //publish status command a status message
        /*$this->execute(
            new PublishStatusCommand(Input::get('body'), Auth::user()->id)
        );*/
        $this->execute(PublishStatusCommand::class, $input);
        Flash::success('Your status has been updated');
        return Redirect::back();

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}