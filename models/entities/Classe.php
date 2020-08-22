<?php


class Classe
{
    private $pk;
    private $name;
    private $teacher;

    /**
     * Classe constructor.
     * @param $pk
     * @param $name
     * @param $teacher
     */
    public function __construct($pk, $name, $teacher)
    {
        $this->pk = $pk;
        $this->name = $name;
        $this->teacher = $teacher;
        // Students?
    }


}