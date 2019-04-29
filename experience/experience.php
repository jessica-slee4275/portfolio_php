<? include "../lib/toMobile.php"; ?>
<?
    session_start();
    include "../lib/dbconn.php";
    $sql = "select * from experience order by list_id desc";
	$result = mysql_query($sql, $connect);
    $total_record = mysql_num_rows($result);
    
    if (mysql_error()) {
        die(mysql_error());
    }
?>
<!DOCTYPE html>
<html>
<head> 
<? include "../lib/head.php"; ?>
<script>
    $(document).ready(function(){
        var barMenu = new BarMenu("#barMenu2");
        barMenu.setSelectMenuItemAt(2, false);
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
    <div id="exp_content">
	    <? include "../lib/sub/experience.php"; ?>
    </div>  <!-- end of menu --> 
    <div class="footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->

</body>
</html>