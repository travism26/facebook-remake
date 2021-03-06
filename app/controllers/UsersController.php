<?php

use Larabook\Users\UserRepository;
use Larabook\Forms\UserValidation;

class UsersController extends \BaseController {

	protected $userRepository;
	protected $userValidation;

	/**
	 * @param UserValidation $userValidation
	 * @param UserRepository $userRepository
	 */
	public function __construct( UserValidation $userValidation, UserRepository $userRepository )
	{
		$this->userRepository = $userRepository;
		$this->userValidation = $userValidation;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userRepository->getPaginated();

		return View::make( 'users.index' )->withUsers( $users );
	}

	public function show( $username )
	{
		$user = $this->userRepository->findByUsername( $username );

		return View::make( 'users.show' )->withUser( $user );
	}

	public function profile()
	{
		$user = Auth::user();
		if ( $user )
		{
			return View::make( 'users.profile' )->withUser( $user );
		} else
		{
			Flash::error( 'Woah something weird happened back there.' );

			return Redirect::route( 'home' );
		}
	}

	public function edit()
	{
		$loggedInUser = Auth::user();
		if ( $loggedInUser )
		{
			return View::make( 'users.edit' )->withUser( $loggedInUser );
		} else
		{
			Flash::error( 'You dont have permission to do this sorry BRAH' );

			return Redirect::route( 'home' );
		}
	}

	public function update( $id )
	{
		$user        = $this->userRepository->findById( $id );
		$input       = Input::all();
		$user->email = $input['email'];
		$this->userValidation->validate( $input );
		$this->userRepository->save( $user );

		return Redirect::route( 'user_profile' );
		//dd($input);
	}
}
