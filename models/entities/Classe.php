<?php


class Classe
{
    private $pk;
    private $name;
    private $teacher;
    private $students;

    /**
     * Classe constructor.
     * @param $pk
     * @param $name
     * @param $teacher
     * @param $students
     */
    public function __construct($pk, $name, $teacher, $students)
    {
        $this->pk = $pk;
        $this->name = $name;
        $this->teacher = $teacher;
        $this->students = $students;
    }


}