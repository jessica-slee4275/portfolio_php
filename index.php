<? include "./lib/toMobile_index.php"; ?>
<?
	session_start();
?>

<!DOCTYPE html>
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <script src="js/menu.js"></script>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<script>
    $(document).ready(function(){
      var barMenu = new BarMenu("#barMenu1");
    });
</script>
</head>

<body>
<div id="wrap">
  <div id="header">
    <? include "./lib/top_login1.php"; ?>
	</div>  <!-- end of header -->
	<div id="menu">
	<? include "./lib/top_menu1.php"; ?>
	</div>  <!-- end of menu --> 
	<div class="container">
  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active carousel-container">
        <img id ="main1Img" class ="mainImg" src="./img/main_carosel/code-1839406_1920.jpg">
        <div class="carousel-caption content">
          <h3>Skills</h3>
          <p>What can I do for Programming?</p>
          <button class="main_btn" onclick="window.location.href='./skills/skills.php'">Check!</button>
        </div>
      </div>
      <div class="item carousel-container">
        <img id ="main2Img" class ="mainImg" src="./img/main_carosel/people-2557396_1920.jpg">
        <div class="carousel-caption content">
          <h3>Experience</h3>
          <p>What have I been experiencing?</p>
          <button class="main_btn" onclick="window.location.href='./experience/experience.php'">Check!</button>
        </div>
      </div>
      <div class="item carousel-container">
        <img id ="main3Img" class ="mainImg" src="./img/main_carosel/friend-2727307_1920.jpg">
        <div class="carousel-caption content">
          <h3>Education & Qulification</h3>
          <p>What have I been learning?</p>
          <button class="main_btn" onclick="window.location.href='./education/education.php'">Check!</button>
        </div>
	    </div>
	    <div class="item carousel-container">
        <img id ="main4Img" class ="mainImg" src="./img/main_carosel/airport-2373727_1920.jpg">
        <div class="carousel-caption content">
          <h3>Hobby</h3>
          <p>My hobby is travel, Check out what I visited!</p>
          <button class="main_btn" onclick="window.location.href='./hobby/hobby.php'">Check!</button>
        </div>
      </div>
    </div>
	
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- end of content -->
<div class = "footer">
  <? include "./lib/footer.php"; ?>
</div>  <!-- end of header -->
</div> <!-- end of wrap -->
<?php
      echo '<p>PHP current version is ' . phpversion() . '</p>';
    ?>
</body>
</html>
