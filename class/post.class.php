<?php
include 'functions.php';
class PostQuery extends Database
{
    public function postinsert()
    {
        if (isset($_POST['post'])) {
            if (isset($_POST['title']) && isset($_POST['body'])) {
                $now = time();

                $title = $_POST['title'];
                $body = $_POST['body'];
                $file_name = $_FILES["fileToUpload"]["name"];
                $temp_file_name = $_FILES["fileToUpload"]["tmp_name"];
                $file_size = $_FILES["fileToUpload"]["size"];
                $target_dir = "uploads/posts/";
                $target_file = strtolower($target_dir.$now . basename($file_name));
                $upload_ok = 1;
                $img_file_type = pathinfo($target_file, PATHINFO_EXTENSION);

                //Check if image is an actual image or fake image
                $check_img = getimagesize($temp_file_name);

                if ($check_img == false) {
                    echo "<script>alert('File is not an image')</script>";

                    $upload_ok = 0;
                } else {
                    $upload_ok = 1;

                    //Check if file already exists
                    if (file_exists($target_file)) {
                        echo "<script>alert('File is already uploaded!')</script>";

                        $upload_ok = 0;
                    } else {
                        //Check file size
                        if ($file_size > 500000) {
                            echo "<script>alert('Please enter a file size between 5mb!')</script>";

                            $upload_ok = 0;
                        } else {
                            //Allow certain file formats
                            if ($img_file_type != "jpg" && $img_file_type != "png" && $img_file_type != "jpeg" && $img_file_type != "gif") {
                                echo "<script>alert('JPG, PNG, JPEG and GIF files are allowed!')</script>";

                                $upload_ok = 0;
                            } else {
                                //Check if $upload_ok is set to 0 by an error
                                if ($upload_ok === 0) {
                                    echo "<script>alert('File has not been uploaded!')</script>";
                                } else {
                                    if (move_uploaded_file($temp_file_name, $target_file)) {
                                        $sql = "INSERT INTO `tbl_post`(`title`, `body`, `image`)VALUES(:title,:body,:image)";
                                        $query = $this->conn->prepare($sql);
                                        $query->bindParam('title', $title, PDO::PARAM_STR);
                                        $query->bindParam('body', $body, PDO::PARAM_STR);
                                        $query->bindParam('image', $target_file, PDO::PARAM_STR);
                                        $query->execute();
                                        echo "<script>alert('Record Added with image')</script>";
                                        echo "<script>window.open('post_manage.php','_self')</script>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }


    public function postfetch(){
       
        $data = null;
        $query = "SELECT * FROM tbl_post";
        return $data = $this->conn->query($query);
    }


    public function edit($id)
	{
		$data = $this->conn->prepare("SELECT * FROM tbl_post WHERE id = :id");
		$data->execute(array (':id' => $id));

		foreach ($data as $value) {
			return $value;
		}
    }
    

    public function delete($id)
    {
        $query = $this->conn->prepare("DELETE FROM tbl_post WHERE id = :id");
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
        //unlink("uploads/$filepath");


        echo "<script>alert('Record Deleted')</script>";
        echo "<script>window.open('post_manage.php','_self')</script>";
    }


    public function postupdate($title, $body, $id)
    {
        $now = time();

        $file_name = $_FILES["fileToUpload"]["name"];
        $temp_file_name = $_FILES["fileToUpload"]["tmp_name"];
        $file_size = $_FILES["fileToUpload"]["size"];
        $target_dir = "uploads/";
        $target_file = strtolower($target_dir.$now . basename($file_name));
        $img = move_uploaded_file($temp_file_name, $target_file);

        $query = $this->conn->prepare("UPDATE tbl_post SET title = :title, body = :body, image= :image  WHERE id = :id");
        $query->bindParam("title", $title, PDO::PARAM_STR);
        $query->bindParam("body", $body, PDO::PARAM_STR);
        $query->bindParam('image', $target_file, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
        echo "<script>alert('Post Has been updated')</script>";
        echo "<script>window.open('post_manage.php','_self')</script>";
    }


    public function textShorten($text, $limit = 300)
    {
        $text = $text. " ";
        $text = substr($text, 0, $limit); //Limit- how much word will show your post
        $text = substr($text, 0, strrpos($text, ' ')); //its breaks string in space
        return $text;
    }
}