<?php
include 'db.php';
class blogQuery extends Database
{

    public function blogpost($start_from, $per_page){

        $data = null;

        $query = "SELECT * FROM tbl_post LIMIT $start_from, $per_page";
        return $data = $this->conn->query($query);

    }


    public function portfolio(){

        $data = null;

        $query = "SELECT * FROM tbl_portfolio  LIMIT 1";
        return $data = $this->conn->query($query);

    }



    public function fetchbyid($id)
	{
		$query = $this->conn->prepare("SELECT * FROM tbl_post WHERE id = :id");
		$query->execute(array (':id' => $id));

		foreach ($query as $value) {
			return $value;
		}
    }


    public function pagination(){

        $query = $this->conn->prepare("SELECT * FROM tbl_post");
        $query->execute();
        $row_count= $query->rowCount();
       // echo "Table have ".$row_count. " rows";
        return $row_count;

    }
    

    // public function pagination(){

    //     //user input
    //     $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    //     $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 2;
    //     //positioning
    //     $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
    //     //query
    //     $articles = $this->conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tbl_post LIMIT {$start},{$perPage}");
    //     $articles->execute();
    //     $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
    //     //pages
    //     $total = $this->conn->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
    //     $pages = ceil($total / $perPage);
        


    //     // $query->execute();


    // }


    // public function searchpost($search_keyword){
       
    //     $sql = 'SELECT * FROM tbl_post WHERE title LIKE :keyword ORDER BY id DESC ';


    //     $pdo_statement =$this->conn->prepare($sql);
    //     $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    //     $pdo_statement->execute();
    //     $result = $pdo_statement->fetchAll();



    // }


    public function blogpostsearch($search, $start_from, $per_page){

        $data = null;

        $query = "SELECT * FROM tbl_post WHERE title LIKE '%$search%' OR body LIKE '%$search%' LIMIT $start_from, $per_page";
        return $data = $this->conn->query($query);

    }


}    