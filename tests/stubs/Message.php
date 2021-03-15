<?php

use Cast\Model\Model;

/**
 * Class Message
 *
 * @property    array       $notes
 * @property    Person      $person
 * @property    Location    $location
 */
class Message extends Model
{
    /**
     * @var array
     */
    protected $attributes = [
        'notes' => null,
        'person' => null,
        'location' => null,
    ];

    /**
     * @param $value
     * @void
     */
    public function setPersonAttribute($value)
    {
        $this->attributes['person'] = new Person($value);
    }

    /**
     * @param $value
     * @void
     */
    public function setLocationAttribute($value)
    {
        $this->attributes['location'] = new Location($value);
    }
}
