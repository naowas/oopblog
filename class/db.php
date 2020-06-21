<?php

class Database
{
    protected $server = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $db = 'oopblog';
    protected $conn;
    
    // IF POSSIBLE, TRY USING PARAMETER IN CONSTRUCTOR METHOD

    public function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=oopblog', $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo 'Connection failed' . $e->getMessage();
        }
    }
}