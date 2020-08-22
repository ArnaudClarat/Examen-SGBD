<?php


class Teacher extends User
{

    /**
     * Teacher constructor.
     */
    public function __construct($pk, $forename, $name, $mailAddress, $password)
    {
        parent::__construct($pk, $forename, $name, $mailAddress, $password);
    }
}