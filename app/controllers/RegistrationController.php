<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Laracasts\Commander\CommandBus;

class RegistrationController extends \BaseController {

    /**
     * @var CommandBus
     */
    private $commandBus;

    /*
     * @var RegistrationForm
     */
    private $registrationForm;

    /**
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus, RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;
        $this->commandBus = $commandBus;
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
        $this->registrationForm->validate(Input::all());

        extract(Input::only('username', 'email','password'));

        $user = $this->commandBus->execute(
            new RegisterUserCommand($username, $email, $password
            ));

        Auth::login($user);
        return Redirect::home();
    }
}
