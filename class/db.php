<?php

class Database
{
    protected $server = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $db = 'oopblog';
    protected $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=oopblog', $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'Connection failed' . $e->getMessage();
        }
    }
}