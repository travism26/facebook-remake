<?php

use Larabook\Forms\SignInForm;

class SessionsController extends \BaseController {

    /**
     * @var SignInForm
     */
    private $signInForm;

    /**
     * @param SignInForm $signInForm
     * @internal param $SignInForm $
     */
    public function __construct(SignInForm $signInForm)
    {
        $this->signInForm = $signInForm;

        $this->beforeFilter('guest', ['except' => 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //fetch the form input
        //validate the form
        //if its invalid go back
        $formData = Input::only('email', 'password');
        $this->signInForm->validate($formData);

        //if its valid sign them in
        if (!Auth::attempt($formData))
        {
            //redirect to /statuses
            //statuses
            Flash::message('We were unable to sign you in. Please check your credentials and try again!');

            return Redirect::back()->withInput();

        }
        Flash::message('Welcome back!');

        return Redirect::intended('/statuses');
    }

    /**
     * log a user out of the application
     * @return mixed
     */
    public function destroy()
    {
        Auth::logout();
        Flash::message('Successfully logged out');

        return Redirect::home();
    }
}
