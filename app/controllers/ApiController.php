<?php

//use Markers;
use Larabook\Maps\markers;
use Larabook\api\githubWrapper;

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
        $git = new githubWrapper($username);
        $gitData = $git->getRepo();
        //dd($gitData);
        return View::make('api.github')->with('repo', $gitData);
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
        /*
         * var events = [
            ['Fredericton', 45.9500, -66.6667, 3],
            ['Gesgapegiag', 48.199, -65.923, 4],
            ['Saint John', 45.2796, -66.0628, 2],
            ['Miramichi', 47.0225, -65.5089, 1]
        ];
         */
        //AUTH code not working...might need to open a support ticket.
        $authCode = "AIzaSyBq0-11FD2K0CJtw4QEw5EKhzKpivs9Lpw";
        $locations = array(
            [
                'Location' => 'Fredericton',
                'latitude' => '45.9500',
                'longitude' => '-66.6667',
                'zIndex' => '3'
            ],
            [
                'Location' => 'Gesgapegiag',
                'latitude' => '48.199',
                'longitude' => '-65.923',
                'zIndex' => '4'
            ]
        );

        $event = $this->markers->getMarkers();
        //dd($event);
        //$location_encoded = json_encode( $locations );

        //dd($location_encoded);
        return View::make('messaging.google-maps')->with('events', $event);
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