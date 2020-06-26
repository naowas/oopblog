<?php
include 'db.php';
class blogQuery extends Database
{

    public function blogpost(){

        $data = null;

        $query = "SELECT * FROM tbl_post LIMIT 3";
        return $data = $this->conn->query($query);

    }


    public function portfolio(){

        $data = null;

        $query = "SELECT * FROM tbl_portfolio  LIMIT 1";
        return $data = $this->conn->query($query);

    }




}    