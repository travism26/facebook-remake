<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-11
 * Time: 9:14 PM
 */

namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator {

    /*
     * Validation rules for the registration form
     */
    protected $rules = [
        'email'    => 'required',
        'password' => 'required'
    ];
} 