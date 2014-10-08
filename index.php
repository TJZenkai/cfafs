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
<script src="js/jquery.js"></script>
<script src="js/jquery.morphbutton.js"></script>
<!--[if lt IE 9]><script src="js/modernizr.custom.js"></script><![endif]-->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>


 <link href="css/bootstrap.min.css" rel="stylesheet"> 
 <link href="css/morphbutton.css" rel="stylesheet"> 
 <link href="css/demo.css" rel="stylesheet"> 





</head>


<body>


<!--
<div class="container text-center">
         
      <p>
        <a href="#" class="morphbutton big-button" data-target="#test">Sign in</a>
      </p>

    </div>-->


    <div id="test" class="morphbutton-content">
      <div class="box">
        <h2>Sign in</h2>
        <button type="button" class="morphbutton-close"><span class="glyphicon glyphicon-remove"></span></button>
        <form action="supportclass/login/login.php" method="POST" class="form-horizontal morphbutton-cascade" role="form">
          <input type="text" placeholder="email" name = "email">
          <input type="password" placeholder="password" name = "pass">
          <input type="submit" value="Sign in">
        </form>
      </div>
    </div>

	
    <div id="test2" class="morphbutton-content">
      <div class="box">
        <h2>Sign up</h2>
        <button type="button" class="morphbutton-close"><span class="glyphicon glyphicon-remove"></span></button>
        <form class="form-horizontal morphbutton-cascade" role="form">
          <input type="text" placeholder="first part of ucla email EX: joebruin@ucla.edu" >
          <input type="text" placeholder="password">
          <input type="text" placeholder="confirm password">
          <input type="submit" value="Sign up">
        </form>
      </div>
    </div>



<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header>
    <!-- shell -->
    <div class="shell">
      <h1 id="logo"><a href="#" style="position: relative;bottom: 28px;right: 250px;"></a></h1>
      <!-- navigation -->
      <nav id="navigation"> 
      <a href="#" class="active" >Home</a> 
      <a href="#">Furniture</a> 
      <a href="#">Electronics</a> 
      <a href="#">Other</a> 
      <a href="#">FAQ</a> 
      <a href="#" class="morphbutton big-button btn btn-info" data-target="#test" style="padding: 10px;color: #6495ED;">Sign in</a>
      <a href="#" class="morphbutton big-button btn btn-info" data-target="#test2" style="padding: 10px;color: #6495ED;">Sign up</a>

      </nav>
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
      <nav class="footer-nav"> 
      <a href="#">Home</a>
       <a href="#">Furniture</a> 
       <a href="#">Electronics</a> 
       <a href="#">Other</a> 
       <a href="#">FAQ</a>
       </nav>
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