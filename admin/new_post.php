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
                         
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>New</strong>
                                        <small> Post</small>
                                    </div>

 
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="title" class=" form-control-label">Title</label>
                                            <input type="text" id="title" placeholder="Enter your title" class="form-control">
                                        </div>


                                        <div id="summernote"></div>
                                            <script>
                                            $('#summernote').summernote({
                                                placeholder: 'Your Post Goes Here',
                                                tabsize: 2,
                                                height: 200,                 // set editor height
                                                width: "100%",                 // set editor height
                                                minHeight: null,             // set minimum height of editor
                                                maxHeight: null,             // set maximum height of editor
                                                dialogsInBody: true
                                            });
                                            </script>


                                            
                                        <div class="form-group">
                                            <!-- <label for="bpdy" class=" form-control-label">Post Body</label>
                                            <input type="text" id="body" placeholder="Post Body Here" class="form-control"> -->
                                        
                            


                                        <!-- <div class="form-group">
                                            <label for="street" class=" form-control-label">Street</label>
                                            <input type="text" id="street" placeholder="Enter street name" class="form-control">
                                        </div> -->
                                    
                                        <button type="button" class="btn btn-primary">Post</button>
                                    </div>
                                </div>

                                
                            </div>
                        </div>


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
