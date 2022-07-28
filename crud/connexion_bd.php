<?php


class Connect
{

    private $conn;

    function __construct($db = 'crud')
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=$db", 'root', '');
    }

    function get($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll()[0];
    }

    function set($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
}
