<?php
include 'header.php';
?>


<style>

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<body>
<?php
include 'portfolio.php';
?>
<div class="main-wrapper">
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <input type="text" placeholder="Search..">
</div>
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
<?php
$format= new Format();
?>

  <!-- Pagination -->
  <?php 
        $per_page = 3;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
        $start_from = ($page-1)*$per_page;
         ?>

        <!-- Pagination -->


<?php 

$model = new blogQuery();
$rows= $model -> blogpost($start_from, $per_page);
foreach ($rows as $row) {
    ?>

			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="../admin/<?php echo $row['image']; ?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo $format->formatDate($row['date']); ?></span><span class="comment"><a href="#">26 comments</a></span></div>
						    <div class="intro"><?php echo $format->textShorten($row['body']); ?></div>
						    <a class="more-link" href="blog_post.php?id=<?php echo $row['id']; ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
		<?php
}
?>	 
			    
			    
			      <!-- Blog Pagination Start -->

            <?php 

            $model = new blogQuery();
            $rows= $model -> pagination();
            
            //$row_count= $query->rowCount();

            $total_pages = ceil($row_count/$per_page);
            echo "<span class='pagination'><a href='index.php?page=1'>".'First Page'."</a>";
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='index.php?page=".$i."'>".$i."</a>";
            }

            echo "<a href='index.php?page=$total_pages'>".'Last Page'."</a></span>" ?>

            <!-- Blog Pagination End -->
				
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
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

    
       
    <!-- Javascript -->          
    <script src="../src/frontend/plugins/jquery-3.4.1.min.js"></script>
    <script src="../src/frontend/plugins/popper.min.js"></script> 
    <script src="../src/frontend/plugins/bootstrap/js/bootstrap.min.js"></script> 

    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="../src/frontend/js/demo/style-switcher.js"></script>     
    

</body>
</html> 

