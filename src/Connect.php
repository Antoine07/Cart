<?php

class Connect
{
    public $db = null;

    public function __construct(array $database){

        $defaults = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];

        $this->db = new PDO($database['dsn'],
            $database['username'], $database['password'],
            $defaults
        );

    }
}