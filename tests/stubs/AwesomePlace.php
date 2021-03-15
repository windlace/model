<?php

use Cast\Model\Model;

/**
 * Class AwesomePlace
 *
 * @property    string  $serial_number
 * @property    string  $description
 * @property    string  $status
 */
class AwesomePlace extends Model
{
    /**
     * @var array
     */
    protected $attributes = [
        'serial_number' => '',
        'description' => '',
        'status' => '',
    ];
}
