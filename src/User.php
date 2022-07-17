<?php

class User
{
    protected $name;
    protected $lastName;

    public function set_name(string $name, string $lastName) 
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function get_fullName() : string 
    {
        return $this->name . " " . $this->lastName;
    }

}