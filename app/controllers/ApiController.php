<?php

class ApiController extends \BaseController {

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
     * @param string $username
     * @return Response
     * @internal param int $id
     */
    public function show($username = 'travism26')
    {
        // get the user and send request to github
        // url: "https://api.github.com/users/travism26/repos",
        $url = "https://api.github.com/users/" . $username . "/repos";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL            => $url,
            CURLOPT_USERAGENT      => 'Codular Sample cURL Request'
        ));
// Send the request & save response to $resp
        $resp = curl_exec($curl);
        $responseObj = json_decode($resp);
        //dd($responseObj);
// Close request to clear up some resources
        curl_close($curl);

        return View::make('api.github')->with('repo', $responseObj);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /api/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /api/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /api/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}