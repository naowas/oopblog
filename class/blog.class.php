<?php
include 'db.php';
class blogQuery extends Database
{

    public function blogpost(){

        $data = null;

        $query = "SELECT * FROM tbl_post ORDER BY id ASC";
        return $data = $this->conn->query($query);

    }


    public function portfolio(){

        $data = null;

        $query = "SELECT * FROM tbl_portfolio  LIMIT 1";
        return $data = $this->conn->query($query);

    }



    public function fetchbyid($id)
	{
		$data = $this->conn->prepare("SELECT * FROM tbl_post WHERE id = :id");
		$data->execute(array (':id' => $id));

		foreach ($data as $value) {
			return $value;
		}
    }
    




}    