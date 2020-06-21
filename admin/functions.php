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
    

    public function insert()
    {
        if(isset($_POST['submit'])){

            $user_name = $_POST['name'];
            $user_bio = $_POST['bio'];
            $find_link = $_POST['find_link'];
        
        
           $sql = "INSERT INTO `tbl_portfolio`(`name`, `description`, `link`)VALUES(:name,:bio,:find_link)";
                $query = $this-> conn -> prepare($sql);
                $query->bindParam(':name',$user_name,PDO::PARAM_STR);
                $query->bindParam(':bio',$user_bio,PDO::PARAM_STR);
                $query->bindParam(':find_link',$find_link,PDO::PARAM_STR);
                $query -> execute();
                echo "<script>alert('Mail has been sent')</script>";
                echo"<script>window.open('index.php','_self')</script>";
        
        }
    }
}

?>
