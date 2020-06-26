<?php
include 'header.php';
//include '../class/user.class.php';
Session::checkSession();

?>

<?php
require '../class/post.class.php';

$model = new PostQuery;
$insert = $model->postinsert();

?>



<body class="animsition">
    <div class="page-wrapper">
        <?php

        include 'navbar.php';
        ?>


        <!-- PAGE CONTAINER-->
        <div class="page-container">


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
						<form style="width: 100%;" action="" method="post" enctype="multipart/form-data" class="form-horizontal>
                         <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>New</strong>
                                        <small> Post</small>
                                    </div>

 
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="title" class=" form-control-label">Title</label>
                                            <input type="text" name="title" id="title" placeholder="Enter your title" class="form-control">
                                        </div>

                                        <div class="form-group">
										<label for="photo" class=" form-control-label">Photo</label>
										<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
									</div>


                                        <textarea name="body" id="body"></textarea>
                                            <script>
                                            $('#body').summernote({
                                                placeholder: 'Your Post Goes Here',
                                                tabsize: 2,
                                                height: 350,                 // set editor height
                                                width: "100%",                 // set editor height
                                                minHeight: null,             // set minimum height of editor
                                                maxHeight: null,             // set maximum height of editor
                                                dialogsInBody: true
                                            });
                                            </script>


                                            
                                        <div class="form-group">
                                    
                                        <input type="submit" id="post" name="post" class="btn btn-info" value="Post">
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                         </form>
                           


                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>


 
   
   <?php

   include 'footer.php';
   ?>

</body>

</html>
<!-- end document-->
