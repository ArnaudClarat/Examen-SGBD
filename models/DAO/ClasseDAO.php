<?php


class ClasseDAO extends DAO
{
    protected $table;
    protected $properties;

    /**
     * ClasseDAO constructor.
     */
    public function __construct()
    {
        $this->table = 't_classes';
        $this->properties = ['pk', 'name', 'teacher']; // Students?
        parent::__construct();
    }

    public static function create($data)
    {
        return new Classe
        (
            $data['pk'],
            $data['name'],
            $data['teacher']
        );
    }

}