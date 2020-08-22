<?php


abstract class DAO
{
    protected $object_list;
    protected $connection;

    function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=online_classes', 'root', '');
        $this->object_list = array();
    }

    function fetch($pk)
    {
        try
        {
            $statement = $this->connection->prepare('SELECT * FROM `{$this->table}` WHERE `pk` = ?');
            $statement->execute($pk);
            return $this->create($statement->fetch(PDO::FETCH_ASSOC));
        } catch (PDOException $e)
        {
            print $e->getMessage();
        }
    }

    function fetchAll()
    {
        try
        {
            $statement = $this->connection->query('SELECT * FROM `{$this->table}`');
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $result)
            {
                $this->object_list[] = $this->create($result);
            }
        } catch (PDOException $e)
        {
            print $e->getMessage();
        }

    }
}