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
        $user = Auth::user();
        if ($user)
        {
            return View::make('users.profile')->withUser($user);
        } else
        {
            Flash::error('Woah something weird happened back there.');
            return Redirect::route('home');
        }
    }

    public function edit()
    {
        $loggedInUser = Auth::user();
        if ($loggedInUser)
        {
            return View::make('users.edit')->withUser($loggedInUser);
        } else
        {
            Flash::error('You dont have permission to do this sorry BRAH');
            return Redirect::route('home');
        }
    }

    public function update($id)
    {
        $user = $this->userRepository->findById($id);
        //$input = Input::all();
        $user->email = Input::get('email');

        $this->userRepository->save($user);
        return Redirect::route('user_profile');
        //dd($input);
    }
}
