<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-16
 * Time: 7:37 PM
 */

namespace Larabook\Forms;


use Laracasts\Validation\FormValidator;

class PublicStatusForm extends FormValidator {

    /*
     * Validation rules for the registration form
     */
    protected $rules = [
        'body'    => 'required'
    ];
} 