<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;

class RegistrationController extends \BaseController {

    /*
     * @var RegistrationForm
     */
    private $registrationForm;

    public function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;

        $this->beforeFilter('guest');
    }

    /**
     * Show the form to register a user.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registration.create');
    }

    public function store()
    {
        //$input = Input::only('username', 'email', 'password', 'password_confirmation');
        //validate the user input
        $this->registrationForm->validate(Input::all());

        //resolving from the IOC container
        //$this->execute('Larabook\Registration\RegisterUserCommand');
        //calling the ::class method will essentially return namespace.
        $user = $this->execute(RegisterUserCommand::class);

        Auth::login($user);

        Flash::message('Glad to have you as a new member');

        return Redirect::home();
    }
}
