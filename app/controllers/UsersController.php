<?php

use Larabook\Users\UserRepository;

class UsersController extends \BaseController {

    protected $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->getPaginated();

        return View::make('users.index')->withUsers($users);
    }

    public function show($username)
    {
        $user = $this->userRepository->findByUsername($username);

        return View::make('users.show')->withUser($user);
    }

    public function profile()
    {
        $loggedInUser = Auth::user();
        if(Auth::user()){
            return View::make('users.profile', $loggedInUser);
        } else {
            Flash::error('Woah something weird happened back there.');
            return Redirect::route('home');
        }

    }
}
