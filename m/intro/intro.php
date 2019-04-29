<? 
	session_start(); 
	//desktop lib
	include "../../lib/dbconn.php";

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
</head>
<body>
<div id="wrap">
    <div id="menu">
	    <? include "../lib/top_menu2.php"; ?>
    </div>  <!-- end of menu -->
    <div id="header">
        <? include "../lib/top_login2.php"; ?>
	</div>  <!-- end of header -->
	
    <div class="intro_content row">
    <?
        $item_pic = str_replace("../img", "../../img", $item_pic);
    ?>
        <div id="view_pic">
            <?= $item_pic ?>
        </div>
        <div id="view_content">
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