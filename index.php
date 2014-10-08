<!DOCTYPE html>
<?php

include("SupportClass/Database.php");
include("SupportClass/SupportSlider.php");

$listCol="helloWorld";
$tableName="helloTable";
connect();



?>

<html lang="en">
<head>
<title>CollegeFafs</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/head.png">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<script src="js/jquery-1.7.2.min.js"></script>
<!--[if lt IE 9]><script src="js/modernizr.custom.js"></script><![endif]-->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header>
    <!-- shell -->
    <div class="shell">
      <h1 id="logo"><a href="#">Particular==</a></h1>
      <!-- navigation -->
      <nav id="navigation"> <a href="#" class="active" >Home</a> <a href="#">Furniture</a> <a href="#">Electronics</a> <a href="#">Other</a> <a href="#">FAQ</a> </nav>
      <!-- end of navigation -->
    </div>
    <!-- end of shell -->
  </header>
  <!-- end of header -->
  
  
 
  <BR><BR><BR><BR> <h2>Furniture</h2>
  

  
  
   <!-- slider -->
  <section class="slider-section">
    <div class="shell">
      <div class="slider-holder"> <span class="slider-shadow"></span>
        <div class="slider flexslider">
          <ul class="slides">
          
		  <?php
   		    $furnitureArray = array();
			$furnitureArray = getFurnitureArray();
			
			for($count = 0; $count<count($furnitureArray[0]);$count++)
			{
			echo"<li>";
                         
			getFurnitureImage($count,$furnitureArray);
     
            echo "<div class='slide-cnt'><h3>";
			  
			getFurnitureTitle($count,$furnitureArray);
              
            echo "</h3><p>";
			
			getFurnitureDescription($count,$furnitureArray);
			
 			echo "</p><a href='#' class='slider-btn'>Check it Out </a> </div></li>";
			}
			?>
          
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end of slider -->
            

           
  
  
 <BR><BR><BR><BR> <h2>Electronics</h2>
  
  
  
    <!-- slider -->
  <section class="slider-section">
    <div class="shell">
      <div class="slider-holder"> <span class="slider-shadow"></span>
        <div class="slider flexslider">
          <ul class="slides">
          
		  <?php
   		    $electronicsArray = array();
			$electronicsArray = getElectronicsArray();
			
			for($count = 0; $count<count($electronicsArray[0]);$count++)
			{
			echo"<li>";
                         
			getElectronicsImage($count,$electronicsArray);
     
            echo "<div class='slide-cnt'><h3>";
			  
			getElectronicsTitle($count,$electronicsArray);
              
            echo "</h3><p>";
			
			getElectronicsDescription($count,$electronicsArray);
			
 			echo "</p><a href='#' class='slider-btn'>Check it Out </a> </div></li>";
			}
			?>
          
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end of slider -->
            

            

           
  
  
  
  

  <BR><BR><BR><BR> <h2>Other Stuff</h2>
  
  
  
  <!-- slider -->
  <section class="slider-section">
    <div class="shell">
      <div class="slider-holder"> <span class="slider-shadow"></span>
        <div class="slider flexslider">
          <ul class="slides">
          
		  <?php
   		    $otherArray = array();
			$otherArray = getOtherArray();
			
			for($count = 0; $count<count($otherArray[0]);$count++)
			{
			echo"<li>";
                         
			getOtherImage($count,$otherArray);
     
            echo "<div class='slide-cnt'><h3>";
			  
			getOtherTitle($count,$otherArray);
              
            echo "</h3><p>";
			
			getOtherDescription($count,$otherArray);
			
 			echo "</p><a href='#' class='slider-btn'>Check it Out </a> </div></li>";
			}
			?>
          
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end of slider -->
  
  
  <!-- main -->
  <div class="main">
    <div class="shell">
      <!-- heading -->
      <div class="heading"> <span class="ico"></span>
        
        <h4>About Us</h4>
        <div class="box">
          <p>Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...</p>
        </div>
      </section>
      <!-- end of content -->
      <!-- aside -->
      <aside>
        <div class="widget">
         
        </div>
      </aside>
      <!-- end of aside -->
      <div class="cl">&nbsp;</div>
    </div>
  </div>
  <!-- end of main -->
  <div id="footer-push"></div>
</div>
<!-- end of wrapper -->
<!-- footer -->
<div id="footer">
  <!-- shell -->
  <div class="shell">
    <!-- footer-top -->
    <div class="footer-top">
      <nav class="footer-nav"> <a href="#">Home</a> <a href="#">Furniture</a> <a href="#">Electronics</a> <a href="#">Other</a> <a href="#">FAQ</a>  </nav>
      <div class="footer-logo"><a href="#">Particular</a></div>
    </div>
    <!-- end of footer-top -->
    <div class="copy">
      <p>Copyright 2012 - Yourname - Your domain - All right reserved. Design by: <a target="_blank" href="http://chocotemplates.com">ChocoTemplates</a></p>
    </div>
  </div>
  <!-- end of shell -->
</div>
<!-- end of footer -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>