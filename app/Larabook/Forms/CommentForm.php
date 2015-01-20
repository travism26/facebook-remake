<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-01-19
 * Time: 10:31 PM
 */

namespace Larabook\Forms;


use Laracasts\Validation\FormValidator;

class CommentForm extends FormValidator {

    /*
     * Rules for the comment form
     */
    protected $rules = [
        'body' => 'required'
    ];
}