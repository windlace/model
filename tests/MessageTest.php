<?php

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    /**
     * @covers Message
     */
    public function test()
    {
        $input = [
            'notes' => 'some notes for Person',
            "person" => [
                "code" => "34be46722100ed26bc3429bd92ad84d8",
                "details" => 'strange one',
                "name" => "Alice",
            ],
            "location" => [
                "available" => true,
                "protocol" => 789054,
                "awesome_place" => [
                    'serial_number' => 'XvF29Mnz',
                    'description' => 'some description...',
                    'status' => 'ready',
                ],
            ],
        ];

        $result = new Message($input);

        $this->assertEquals($input['notes'], $result->notes);
        $this->assertInstanceOf(Person::class, $result->person);
        $this->assertInstanceOf(Location::class, $result->location);
        $this->assertInstanceOf(AwesomePlace::class, $result->location->awesome_place);
    }
}
