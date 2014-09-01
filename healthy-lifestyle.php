<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LEVIF</title>
    
    <!-- Owl Carousel Assets -->
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/owl-carousel/owl.theme.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/layout.css" />
    
    
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    
    
    
    <div id="topbanner">
	    <div id="logo-wrapper">
		    <a href="index.php">
			    <img src="images/logo.png">
		    </a>
	    </div>
	    <!--logo-wrapper-->
	    
	   <?php include("inc-nav.php");?>
    </div>
    <!--topbanner-->
    
    
    
    
    <!--mobile nav-->
    <div class="off-canvas-wrap" data-offcanvas>
	  <div class="inner-wrap">
	    <nav class="tab-bar">
	      
	
	      <section class="middle tab-bar-section">
	        <h1 class="title">
		        <a href="index.php">
			        <img src="images/logomob.png">
		        </a>
	        </h1>
	      </section>
	
	      <section class="right-small">
	        <a class="right-off-canvas-toggle menu-icon" href="#"></a>
	      </section>
	    </nav>
	
	    
	
	   <?php include("inc-mobmenu.php");?>
	
	    <section class="main-section">
	    
	    
		
	      
	      
	    <div id="wrapper">
		    
		    
		    		    
		    
		    
		    <div id="inner-wrapper">
			  
			 <div class="gridrow">    
			    
				 <div class="tworow pink" style="padding:0px;">
					 <img src="images/t11.png">
				 </div>
				 <div>
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v1.jpg">
								  <strong>Test</strong>
					 </a>
				 </div>
				 <div>
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v2.jpg">
								  <strong>Test</strong>
							  </a>
				 </div>
				 <div class="last">
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v3.jpg">
								  <strong>Test</strong>
							  </a>
				 </div>
				 
				 <div>
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v2.jpg">
								  <strong>Test</strong>
							  </a>
				 </div>
				 <div>
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v3.jpg">
								  <strong>Test</strong>
							  </a>
				 </div>
				 <div>
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v1.jpg">
								  <strong>Test</strong>
							  </a>
				 </div>
				 <div>
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v2.jpg">
								  <strong>Test</strong>
							  </a>
				 </div>
				 <div class="last">
					 <a href="healthy-lifestyle-detail.php">
								  <img src="images/v3.jpg">
								  <strong>Test</strong>
							  </a>
				 </div>    
			 
			 <div class="clearfix"></div>
			 </div>
			 <!--gridrow-->
			    
			    
			    <div class="clearfix"></div>
		    </div>
		    <!--inner-wrapper-->
			
			
			<?php include("inc-footer.php");?>
			
			
	    </div>
	    <!--wrapper--> 
	      
	      
	    </section>
	    <!--main-section-->
	    
	  <a class="exit-off-canvas"></a>
	
	  </div>
	</div>
	<!--end mobile nav-->
    
    
    
    
    
    
        
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="css/owl-carousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script>
    $(document).ready(function() {
      $('#healthybtn').addClass('active');
      $("#owl-demo").owlCarousel({
      navigation : false,
      slideSpeed : 600,
      autoPlay:true,
      paginationSpeed : 600,
      singleItem : true,
      navigation:true,
      pagination:false

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
      
      
      
       //Sort random function
	  
	 
	  $("#homeblock").owlCarousel({
	  	pagination:false,
	    navigation: true,
	    items : 3,
	    itemsDesktop : [1199,3],
	    itemsDesktopSmall : [979,3],
	    navigationText: [
	      "<i></i>",
	      "<i></i>"
	      ],
	   
	    
	   
	 
	  });
      
      
      
    });
    </script>
  </body>
</html>
