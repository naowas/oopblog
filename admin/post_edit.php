<?php

require '../class/post.class.php';

?>

<?php
include 'header.php';

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
        
               
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal>
                        
                         <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>New</strong>
                                        <small> Post</small>
                                    </div>
                  

 
                                    <div class="card-body card-block">
                                        <div class="form-group">

                                       <?php

                                        $model = new PostQuery;
                                        $id = $_REQUEST['id'];
                                        $row = $model->edit($id);
                                       
                                        ?> 
                                    
                                            <label for="title" class=" form-control-label">Title</label>
                                            <input type="text" name="title" id="title" value="<?php echo $row['title']; ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
										<label for="photo" class=" form-control-label">Photo</label>
										<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
									</div>


                                        <textarea name="body" id="body"><?php echo $row['body']; ?></textarea>
                                           

                                            
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


    <script>
                                            $('#body').summernote({
                                                placeholder: 'Your Post Goes Here',
                                                tabsize: 2,
                                                height: 200,                 // set editor height
                                                width: "100%",                 // set editor height
                                                minHeight: null,             // set minimum height of editor
                                                maxHeight: null,             // set maximum height of editor
                                                dialogsInBody: true
                                            });
                                            </script>

   
   <?php

   include 'footer.php';
   ?>

</body>

</html>
<!-- end document-->
