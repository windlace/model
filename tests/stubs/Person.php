<?php

use Cast\Model\Model;

/**
 * Class Person
 *
 * @property    string  $code
 * @property    string  $details
 * @property    string  $phone
 */
class Person extends Model
{
    /**
     * @var array
     */
    protected $attributes = [
        'code' => '',
        'details' => '',
        'phone' => '',
    ];
}
