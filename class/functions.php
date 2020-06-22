<?php
include 'db.php';
class NaowasQuery extends Database
{
    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && isset($_POST['bio'])) {
                $user_name = $_POST['name'];
                $user_bio = $_POST['bio'];
                $find_link = $_POST['find_link'];
                $file_name = $_FILES["fileToUpload"]["name"];
                $temp_file_name = $_FILES["fileToUpload"]["tmp_name"];
                $file_size = $_FILES["fileToUpload"]["size"];
                $target_dir = "uploads/";
                $target_file = strtolower($target_dir . basename($file_name));
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
                                        $sql = "INSERT INTO `tbl_portfolio`(`name`, `description`, `link`, `image_path`)VALUES(:name,:bio,:find_link, :image_path)";
                                        $query = $this->conn->prepare($sql);
                                        $query->bindParam('name', $user_name, PDO::PARAM_STR);
                                        $query->bindParam('bio', $user_bio, PDO::PARAM_STR);
                                        $query->bindParam('find_link', $find_link, PDO::PARAM_STR);
                                        $query->bindParam('image_path', $target_file, PDO::PARAM_STR);
                                        $query->execute();
                                        echo "<script>alert('Record Added with image')</script>";
                                        echo "<script>window.open('portfolio.php','_self')</script>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;

        $query = "SELECT * FROM tbl_portfolio";
        return $data = $this->conn->query($query);
    }

    public function delete($id, $filepath)
    {
        $query = $this->conn->prepare("DELETE FROM tbl_portfolio WHERE id = :delete_id");
        $query->bindParam("delete_id", $id, PDO::PARAM_STR);
        $query->execute();
        unlink("uploads/$filepath");


        echo "<script>alert('Record Deleted')</script>";
        echo "<script>window.open('portfolio.php','_self')</script>";
    }

    // public function deleteall( $allid ) {
    //     $query = $this->conn->prepare( "DELETE * FROM tbl_portfolio" );
    //     $query->execute();
    //     echo "<script>alert('Record ALLLLLLLLl')</script>";

    // }


    public function update($name, $bio, $link, $id)
    {
        $now = time();

        $file_name = $_FILES["fileToUpload"]["name"];
        $temp_file_name = $_FILES["fileToUpload"]["tmp_name"];
        $file_size = $_FILES["fileToUpload"]["size"];
        $target_dir = "uploads/";
        $target_file = strtolower($target_dir.$now . basename($file_name));
        $img = move_uploaded_file($temp_file_name, $target_file);

        $query = $this->conn->prepare("UPDATE tbl_portfolio SET name = :name, description = :bio, link = :link, image_path= :image_path  WHERE id = :edit_id");
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $query->bindParam("bio", $bio, PDO::PARAM_STR);
        $query->bindParam("link", $link, PDO::PARAM_STR);
        $query->bindParam('image_path', $target_file, PDO::PARAM_STR);
        $query->bindParam("edit_id", $id, PDO::PARAM_STR);
        $query->execute();
        echo "<script>alert('Record Has been updated')</script>";
        echo "<script>window.open('portfolio.php','_self')</script>";
    }


    
}
