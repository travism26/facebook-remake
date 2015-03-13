<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-03-12
 * Time: 10:05 PM
 */

namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class UserValidation extends FormValidator {

	/*
	 * Validation rules for the registration form
	 */
	protected $rules = [
		'email' => 'required|unique:users,email'
	];

}