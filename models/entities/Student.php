<?php


class Student extends User
{

    /**
     * Student constructor.
     */
    public function __construct($pk, $forename, $name, $mailAddress, $password)
    {
        parent::__construct($pk, $forename, $name, $mailAddress, $password);
    }
}