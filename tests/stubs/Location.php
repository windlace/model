<?php

use Cast\Model\Model;

/**
 * Class Location
 *
 * @property    bool            $availability
 * @property    bool            $protocol
 * @property    AwesomePlace    $awesome_place
 */
class Location extends Model
{
    /**
     * @var array
     */
    protected $attributes = [
        'availability' => null,
        'protocol' => null,
        'awesome_place' => null,
    ];

    /**
     * @param $value
     * @void
     */
    public function setAwesomePlaceAttribute(array $value)
    {
        $this->attributes['awesome_place'] = new AwesomePlace($value);
    }
}
