<? include "../lib/toMobile.php"; ?>
<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head> 
<? include "../lib/head.php"; ?>
<? include "../lib/sub/hobby.php"; ?>
</head>

<body>
<div id="wrap">
    <div id="header">
        <? include "../lib/top_login2.php"; ?>
	</div>  <!-- end of header -->
	<div id="menu">
	    <? include "../lib/top_menu2.php"; ?>
    </div>  <!-- end of menu --> 
    <div><p class="content content-title text-align-center">My hobby is travel, check what I visited!!</div>
    <div id="chartdiv"></div>
    <div id="info">Seletced countries: <span id="selected">-</span></div>
    <div id ="usa">
        <? include "./usa.php" ?>
    </div>
    <div id ="canada">
        <? include "./canada.php" ?>
    </div>
    <div id ="korea">
        <? include "./korea.php" ?>
    </div>
     <!-- end of modal -->
    <div class = "footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->

</body>
</html>