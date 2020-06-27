<?php

include 'header.php';
?>

<body>
<?php
include 'portfolio.php';
?>

<?php
$fm = new Format();
?>



    
    <div class="main-wrapper">
	    
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			<?php 

$model = new blogQuery();
$rows = $model->blogpost();        
if (!empty($rows)) {
    foreach ($rows as $row) {
?>				
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="../admin/<?php echo $row['image']; ?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo $fm->formatDate( $row['date']); ?></span><span class="comment"><a href="#">4 comments</a></span></div>
						    <div class="intro"><?php echo $fm->textShorten($row['body']); ?></div>
						    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			  
				<?php
    }
}
?>	    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="../src/frontend/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="../src/frontendcss/theme-2.css" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="../src/frontend/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="../src/frontend/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="../src/frontend/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="../src/frontend/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="../src/frontend/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="../src/frontend/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
   <!-- Custom JS -->
   <script src="../src/frontend/js/blog.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="../src/frontend/js/demo/style-switcher.js"></script>     

	    <!-- Javascript -->          
		<script src="../src/frontend/plugins/jquery-3.4.1.min.js"></script>
    <script src="../src/frontend/plugins/popper.min.js"></script> 
    <script src="../src/frontend/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="../src/frontend/js/demo/style-switcher.js"></script>  
    

</body>
</html> 

