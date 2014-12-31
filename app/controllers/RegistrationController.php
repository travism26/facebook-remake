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
        //validate the user input
        $this->registrationForm->validate(Input::all());

        /*
         * This code has been abstracted in the `CommanderTrait` class
         * Laracasts\Commander\CommanderTrait
         */
//        extract(Input::only('username', 'email','password'));
//
//        $user = $this->execute(
//            new RegisterUserCommand($username, $email, $password
//            ));

        //resolving from the IOC container
        $this->execute('Larabook\Registration\RegisterUserCommand');
        //calling the ::class method will essentially return namespace.
        $user = $this->execute(RegisterUserCommand::class);

        Auth::login($user);

        Flash::message('Glad to have you as a new member');

        return Redirect::home();
    }
}
