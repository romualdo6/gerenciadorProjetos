<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ProjectValidator.
 *
 * @package namespace App\Validators;
 */
class ProjectValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        'owner_id' => 'required',
        'client_id' => 'required',
        'name' => 'required|email',
        'description' => 'required'
    ];
}
