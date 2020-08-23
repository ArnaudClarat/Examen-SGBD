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
        $connection = new PDO('mysql:host=localhost;dbname=online_classes', 'root', '');
        $statement = $connection->prepare('SELECT `student` FROM `t_registrations` WHERE classe = ?');
        $statement->execute($data['pk']);
        var_dump($statement);
        return new Classe
        (
            $data['pk'],
            $data['name'],
            $data['teacher'],
            $data['students'] // Créer Array d'Objet
        );
    }

}