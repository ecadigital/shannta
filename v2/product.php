<? require("./lib/system_core.php"); ?>
<?
$_SESSION["PRODUCT_QTY"]="1";
$_SESSION["PRODUCT_ID"]="PL001";
$sql = "SELECT p.* FROM products_main p";
$sql.= " WHERE p.id='".$_SESSION["PRODUCT_ID"]."'";

$Conn->query($sql);
$Content = $Conn->getResult();
$RowHead=$Content[0];
$physical_name="./uploads/products/".$RowHead["filepic"];
$date_news=date("d M Y",strtotime($RowHead["createdate"]));

$content_html = preg_replace("/<img[^>]+\>/i", " ", $RowHead["content"]); 
$content_html=strip_tags($content_html);
$content_html = SystemSubString($content_html,300,'..');

if($_REQUEST["did"]==""){
	$_mid="MNT08";
	$sql = "SELECT p.* FROM article_main p";
	$sql.= " WHERE p.menu_id='".trim($_mid)."'";
	$sql.= " ORDER BY p.order_by asc";	
	$Conn->query($sql,0,1);
	$ContentList = $Conn->getResult();
	$did = $ContentList[0]["id"];
}else{
	$did=$_REQUEST["did"];
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
		    
		    
		    <div id="product-wrapper">
			    <div id="product-pic">
				    <div id="thumbpic">
					    <img id="tpic" src="<?=$physical_name?>">
				    </div>
				    <!--thumbpic-->
				    <div id="product-desc">
					    <h5><?=$RowHead["name"]?></h5>
					    <strong id="price"><?=number_format($RowHead["price"],0)?> THB.</strong>
					    
					   <div id="selectqty">Qty : </div>
					    <div id="qty">   
						        <select id="input_qty">
						          <option value="1">1</option>
						          <option value="2">2</option>
						          <option value="3">3</option>
						          <option value="4">4</option>
						        </select>	    
					    </div>
					    <Div class="clearfix"></Div>
					    <div id="addbtn">
						    <a id="btn-goto-order" href="javascript:void(0)" class="button">Add to basket</a>
					    </div>
					    
					    <div id="txtdesc" style="display:inline-block;">
						    <p>
							 <?=nl2br($RowHead["content"])?>	
						    </p>
                            <div style="clear:both;"></div>
					    </div>
					    <!--txtdesc-->
				    </div>
				    <!--product-desc-->
			    </div>
			    <!--product-pic-->
		    </div>
		    <!--product-wrapper-->
		    
		    
		    <div id="line3"></div>
		    
		    <div id="inner-wrapper">
			    
			    
			    
			    
			    
			    
			    <div class="row">
				  <div class="medium-4 columns">
					  <div class="nomg pink headblock">
						  <h1 class="white">Natural</h1>
						  <h2 class="white">Ingrediant</h2>
					  </div>	  
					  
					  <div id="home-shortcut" class="showmob">		
						<div id="homeblock" class="owl-carousel owl-theme">
                        
                        <?					
				  		$_mid="MNT08";
						$sql = "SELECT p.* FROM article_main p";
						$sql.= " WHERE p.menu_id='".trim($_mid)."'";
						$sql.= " ORDER BY p.order_by asc";	
						$Conn->query($sql);
						$ContentList = $Conn->getResult();
						$CntRecInPage = $Conn->getRowCount();
						$TotalRec= $Conn->getTotalRow();						
						for ($i=0;$i<$CntRecInPage;$i++) {  
						
							$Row = $ContentList[$i];
							$physical_name="./uploads/news/".$Row["filepic"];
							if (!(is_file($physical_name) && file_exists($physical_name) )) {
								$physical_name="./images/photo_not_available.jpg";
							}
						?>
                        
                        
						  <div class="item">
						   <div class="sblock <? if(($i+1)%2 ==0){?> sidemg <? } ?>"   >
                              <? if($did==$Row["id"]){?><div class="linkactive"></div><? } ?>
							<a href="product.php?did=<?=$Row["id"]?>">
								   <img src="<?=$physical_name?>">
								  <strong><span><?=$Row["name"]?></span></strong>
							  </a>
						  </div><!--sblock--></div>
                          
                        <? } ?>		  
						</div>
			</div>
			<!--home-shortcut-->
					  
					  
					  
					  
					  
					  <div id="bside" class="showpc">
                      
                       
                            <?
							
					
							
				  		$_mid="MNT08";
						$sql = "SELECT p.* FROM article_main p";
						$sql.= " WHERE p.menu_id='".trim($_mid)."'";
						$sql.= " ORDER BY p.order_by asc";	
						$Conn->query($sql);
						$ContentList = $Conn->getResult();
						$CntRecInPage = $Conn->getRowCount();
						$TotalRec= $Conn->getTotalRow();
					
						
						for ($i=0;$i<$CntRecInPage;$i++) {  
						
							$Row = $ContentList[$i];
							$physical_name="./uploads/news/".$Row["filepic"];
							if (!(is_file($physical_name) && file_exists($physical_name) )) {
								$physical_name="./images/photo_not_available.jpg";
							}
						
						?>
                      
						  <div class="sblock <? if(($i+1)%2 ==0){?> sidemg <? } ?>">
                            <? if($did==$Row["id"]){?><div class="linkactive"></div><? } ?>
							  <a href="product.php?did=<?=$Row["id"]?>">
								  <img src="<?=$physical_name?>">
								  <strong><span><?=$Row["name"]?></span></strong>
							  </a>
						  </div><!--sblock-->
                          
                          <? } ?>
						  
					   <? if(($i+1)%2 ==0){?>
                        <div class="sblock empty sidemg"> </div>
                        <? } ?>
                        
					  </div>
					  <!--bside-->		  
					  
				  </div>  
				  
                  <?
				  $sql = "SELECT p.* FROM article_main p";
					$sql.= " WHERE p.id='".$did."'";
					
					$Conn->query($sql);
					$Content = $Conn->getResult();
					$Row=$Content[0];
					?>
				  
				  
				  <div class="medium-8 columns">
					    
					  <div class="mg lightbrown">
					  
					  	  <h4>  <img src="images/headbg.png"> <?=$Row["name"]?></h4>
						  <div >   
                         <?=$Row["content"]?>	
							</div>


					  </div>
					  
					  					  
				  </div>
				  
				  
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
      $('#productbtn').addClass('active');
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
	  
	  <? if($_REQUEST["did"]!=""){ ?>
	  $('html, body').animate({
        scrollTop: $("#inner-wrapper").offset().top
    }, 1000);
	  
	  <? } ?>


	$('#btn-goto-order').click(function(){	
											
			var Vars="ModuleAction=gotoOrder&qty="+$('#input_qty').val();
		
			$.ajax({
				url : "product-action.php",
				data : Vars,
				type : "post",
				cache : false ,
				success : function(resp){
					window.location='order-step.php';
				}
			});										
		});
    });// End Doc ready
    </script>
  </body>
</html>
