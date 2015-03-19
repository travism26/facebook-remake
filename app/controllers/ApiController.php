<?php

//use Markers;
use Github\Client;
use Larabook\Maps\markers;
use Larabook\api\githubWrapper;
use GrahamCampbell\GitHub\Facades\GitHub;

class ApiController extends \BaseController {

	protected $markers;

	/**
	 * @param markers $markers
	 */
	public function __construct(markers $markers)
	{
		$this->markers = $markers;
	}

	/**
	 * Display a listing of the resource.
	 * GET /api
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('api.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /api/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /api
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /github/{username}
	 *
	 * @param string $username
	 *
	 * @return Response
	 * @internal param int $id
	 */
	public function show($username = 'travism26')
	{
		// get the user and send request to github
		// url: "https://api.github.com/users/travism26/repos",

		$client       = new Client();
		$repositories = $client->api('user')->repositories($username);

		return View::make('api.github')->with('repo', $repositories);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /api/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /api/{id}
	 * @return Response
	 * @internal param int $id
	 */
	public function google()
	{
		return Redirect::to('/');
		//return View::make('messaging.google-maps')->with('events', $event);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /api/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}