<?php

class Conexion{
    public $statement;

    public function db_connect()
    {
        try {
            $this->statement = new PDO('mysql:host=localhost;dbname=escuela_form','root','');
        } catch (PDOException $err) {
            echo 'Error connecting to database: ' . $err->getMessage();
        }
    }

}


?>