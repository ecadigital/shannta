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
			  
			  
			  
			  
			  
			  
			   <div class="grid">
				   
				   <div class="vblock">
					   
					   <div class="nomg pink headblock" style="padding:0px;">
						  <!--<h1 class="white">Our Ads</h1>
						  <h2 class="white" style="font-size:1.2em; position:relative;">ติดตามพวกเราได้ที่...</h2>-->
						  <img src="images/adtitle.png">
					  </div>
					  
					  <div class="clearfix"></div>
					   
					   <div id="video">
							  <a class="v1" href="ad-detail.php">
							   	<img src="images/a14.jpg">
						   	</a> 
					   </div>
					   <!--video-->
					   
				   </div>
				   <!--vid-->
				   
				   	<div class="vblock">
					   	
					   	<div id="adpic">
						   	<a href="ad-detail.php">
							   	<img src="images/ads1.jpg">
						   	</a>
					   	</div>
					   	<!--adpic-->
					   	
					   	<div class="clearfix"></div>
					   	
					   	<div id="social">
						   	<div class="social1">
							   	<a href="ad-detail.php">
								   	<img src="images/igg.png">
							   	</a>
						   	</div>
						   	<!--social1-->
						   	<div class="social2">
							   	<a href="ad-detail.php">
								   	<img src="images/h2.png">
							   	</a>
						   	</div>
						   	<!--social2-->
					   	</div>
					   	<!--social-->
					   	
				   	</div>
				   <!--vid-->
				   
				   	<div class="smallblock">
					   	<div class="t3 c1">
						   	<a href="ad-detail.php">
							   	<img src="images/ig2.jpg">
						   	</a>
					   	</div>
					   	
					   	<div class="t3">
						   	<a href="ad-detail.php">
							   	<img src="images/fb2.jpg">
						   	</a>
					   	</div>
					   	
					   	<div id="lastt3" class="t3">
						   	<a href="ad-detail.php">
							   	<img src="images/gh2.jpg">
						   	</a>
					   	</div>
				   	</div>
				   <!--vid-->
				   
				   
				   
			  
			  <div class="clearfix"></div>
			  
			  <div class="v2">
				  <div>
					  <a href="ad-detail.php">
							   	<img src="images/ig2.jpg">
						   	</a>
				  </div>
				  <div>
					  <a href="ad-detail.php">
							   	<img src="images/ig2.jpg">
						   	</a>
				  </div>
				  <div class="nomgr">
					  <a href="ad-detail.php">
							   	<img src="images/ig2.jpg">
						   	</a>
				  </div>
				  <div>
					  <a href="ad-detail.php">
							   	<img src="images/ig2.jpg">
						   	</a>
				  </div>
				  <div>
					  <a href="ad-detail.php">
							   	<img src="images/ig2.jpg">
						   	</a>
				  </div>
				  <div class="nomgr">
					  <a href="ad-detail.php">
							   	<img src="images/ig2.jpg">
						   	</a>
				  </div>
				  <div class="clearfix"></div>
			  </div>
			  <div class="v3">
				  <a href="ad-detail.php">
							   	<img src="images/a15.jpg">
						   	</a>
			  </div>
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
      $('#adsbtn').addClass('active');
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
