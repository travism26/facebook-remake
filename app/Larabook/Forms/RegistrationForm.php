<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-11
 * Time: 9:14 PM
 */

namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator {

	/*
	 * Validation rules for the registration form
	 */
	protected $rules = [
		'username' => 'required|unique:users,username',
		'email'    => 'required|unique:users,email',
		'password' => 'required|confirmed'
	];
} 