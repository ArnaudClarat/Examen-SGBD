<?php


class StudentDAO extends DAO
{
    protected $table;
    protected $properties;

    /**
     * StudentDAO constructor.
     */
    public function __construct()
    {
        $this->table = 't_students';
        $this->properties = ['pk', 'forename', 'name', 'mailAddress'];
        parent::__construct();
    }

    public static function create($data)
    {
        return new Student
        (
            $data['pk'],
            $data['forename'],
            $data['name'],
            $data['mailAddress'],
            $data['password']
        );
    }

}