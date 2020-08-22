<?php


abstract class User
{
    private $pk;
    private $forename;
    private $name;
    private $mailAddress;
    private $password;

    /**
     * Student constructor.
     * @param $pk
     * @param $forename
     * @param $name
     * @param $mailAddress
     * @param $password
     */
    public function __construct($pk, $forename, $name, $mailAddress, $password)
    {
        $this->pk = $pk;
        $this->forename = $forename;
        $this->name = $name;
        $this->mailAddress = $mailAddress;
        $this->password = $password;
    }

    public function __get($property)
    {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
        print "Propriété " . " de Student non trouvée";
        return null;
    }
    function __set($property, $value)
    {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
        print 'Propriété ' . ' de Student non trouvée';
    }
}