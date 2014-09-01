<? require("./lib/system_core.php"); ?>
<?
$did		=$_GET["did"];
$_mid="MNT01";

$sql = "SELECT p.* FROM article_main p";
$sql.= " WHERE p.id='".$did."'";

$Conn->query($sql);
$Content = $Conn->getResult();
$RowHead=$Content[0];
$CateID	=$RowHead["cate_id"];

$physical_name="../uploads/news/".$RowHead["physical_name"];

$date_news=date("d M Y",strtotime($RowHead["createdate"]));

$content_html = preg_replace("/<img[^>]+\>/i", " ", $RowHead["content"]); 
$content_html=strip_tags($content_html);
$content_html = SystemSubString($content_html,300,'..');



$physical_name="./uploads/news/".$RowHead["filepic"];

if (!(is_file($physical_name) && file_exists($physical_name) )) {
	
	$Photo_CMS_fb="http://www.levifbeauty.com‏/images/photo_not_available.jpg";
}else{
	$Photo_CMS_fb="http://www.levifbeauty.com‏/uploads/news/".$RowHead["filepic"];
}

?>
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
			    
			    
			    
			    
			    
			    
			    <div class="row">
				  <div class="medium-4 columns">
					  <div class="nomg healthy_box headblock">
						  <h1 class="white" style="font-size:2.8em;">Healthy Lifestyle</h1>
					 <h2 class="white" style="font-size:1.2em; position:relative; top:-5px;">สาระหน้ารู้เกี่ยวกับสุขภาพ ความงาม</h2>
					  </div>
					  
					  
					  <div id="bside" class="showpc">
                      
                        <?
				  	
						$sql = "SELECT p.* FROM article_main p";
						$sql.= " WHERE p.menu_id='".trim($_mid)."'";
						$sql.= " ORDER BY p.order_by asc";	
						$Conn->query($sql);
						$ContentList = $Conn->getResult();
						$CntRecInPage = $Conn->getRowCount();
						$TotalRec= $Conn->getTotalRow();
						
						$c_index=2;
						
						for ($i=0;$i<$CntRecInPage;$i++) {  
							$c_index++;
							$Row = $ContentList[$i];
							$physical_name="./uploads/news/".$Row["filepic"];
							if (!(is_file($physical_name) && file_exists($physical_name) )) {
								$physical_name="./images/photo_not_available.jpg";
							}
						
						?>
                        
                          
						  <div class="sblock <? if(($i+1)%2 ==0){?> sidemg <? } ?>">
						  	  <? if($did==$Row["id"]){?><div class="linkactive"></div><? } ?>
							  <a href="healthy-lifestyle-detail.php?did=<?=$Row["id"]?>">
								  <img src="<?=$physical_name?>">
								  <strong><span><?=$Row["name"]?></span></strong>
							  </a>
						  </div><!--sblock-->
                        
                        <? } ?>
                        
                        <? if(($i+1)%2 ==0){?>
                        <div class="sblock empty sidemg"> </div><!--sblock-->
                        <? } ?>
						   	 
						 
					  </div>
					  <!--bside-->	  
					  
				  </div>		
                  
                
				  
				  <div class="medium-8 columns">
					    
					  
					  <div class="mg lightbrown">
					  	  <h4> <img src="images/headbg.png">  <?php echo $RowHead["name"]; ?></h4>
						  <div >   
                         <?=$RowHead["content"]?>	
							</div>

					  </div>
					  
					  					  
				  </div>
				  
				  
				  <div id="bside" class="showmob">
                  
                  		    <?
				  	
						$sql = "SELECT p.* FROM article_main p";
						$sql.= " WHERE p.menu_id='".trim($_mid)."'";
						$sql.= " ORDER BY p.order_by asc";	
						$Conn->query($sql);
						$ContentList = $Conn->getResult();
						$CntRecInPage = $Conn->getRowCount();
						$TotalRec= $Conn->getTotalRow();
						
						$c_index=2;
						
						for ($i=0;$i<$CntRecInPage;$i++) {  
							$c_index++;
							$Row = $ContentList[$i];
							$physical_name="./uploads/news/".$Row["filepic"];
							if (!(is_file($physical_name) && file_exists($physical_name) )) {
								$physical_name="./images/photo_not_available.jpg";
							}
						
						?>
                        
                  
						  <div class="sblock <? if(($i+1)%2 ==0){?> sidemg <? } ?>">
                          	  <? if($did==$Row["id"]){?><div class="linkactive"></div><? } ?>
							  <a href="healthy-lifestyle-detail.php?did=<?=$Row["id"]?>">
								  <img src="<?=$physical_name?>">
								  <strong><span><?=$Row["name"]?></span></strong>
							  </a>
						  </div><!--sblock-->
                          
                          <? } ?>
						  		
					  </div>
					  <!--bside-->
				  
				  
				</div>
			    <!--row-->
			    
			    
			    
			    
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
	    items : 2,
	    itemsDesktop : [1199,3],
	    itemsDesktopSmall : [979,3],
	     itemsTablet: [768,3],
	     itemsTabletSmall: false,
	     itemsMobile : [479,2],
	    navigationText: [
	      "<i></i>",
	      "<i></i>"
	      ],
	     
	  });
      
      
      
    });
    </script>
  </body>
</html>
