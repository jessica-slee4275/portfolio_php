<? include "../lib/toMobile.php"; ?>
<? 
	session_start(); 
	
	include "../lib/dbconn.php";

	$sql = "select * from intro order by id desc limit 1";
	$result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);      
    $item_title  = $row[title];
    $item_pic  = $row[pic];
	$item_detail = $row[detail];
?>
<!DOCTYPE html>
<html>
<head> 
<? include "../lib/head.php"; ?>
<script>
    $(document).ready(function(){
        var barMenu = new BarMenu("#barMenu2");
        barMenu.setSelectMenuItemAt(0, false);
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
    <div class="intro_content row">
        
        <div id="view_pic" class="col col-3">
            <?= $item_pic ?>
        </div>
        <div class="col col-7" style = "margin-left: -5%;">
            <div id="view_title">
                <?= $item_title ?>
            </div>
            <div id="view_detail">
                <?= $item_detail ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->
</body>
</html>