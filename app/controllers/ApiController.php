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
        return View::make('api.github');
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
    public function show($username = "EPIC")
    {
        return View::make('api.github')->with('username', $username);
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