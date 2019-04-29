<? include "../lib/toMobile.php"; ?>
<?
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<? include "../lib/head.php"; ?>
<script>
    $(document).ready(function(){
        var barMenu = new BarMenu("#barMenu2");
        barMenu.setSelectMenuItemAt(1, false);
    });
</script>
</head>
<body>
<div id="wrap">
    <div id="header">
        <? include "../lib/top_login2.php"; ?>
	</div>  <!-- end of header -->
	<div id="menu">
	    <? include "../lib/top_menu2.php"; ?>
    </div>  <!-- end of menu --> 
    <div id="chartdiv"></div>
    <div class = "footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->
<? include "../lib/sub/skills.php"; ?>
</body>
</html>