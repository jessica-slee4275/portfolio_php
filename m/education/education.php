<?
    session_start();
    include "../../lib/dbconn.php";
    //edu query
    $edu_sql = "select * from education where list_id like 'edu%' order by right(list_id,1) ASC";
	$edu_result = mysql_query($edu_sql, $connect);
    $edu_total_record = mysql_num_rows($edu_result);
    //qua query
    $qua_sql = "select * from education where list_id like 'qua%' order by right(list_id,1) ASC";
	$qua_result = mysql_query($qua_sql, $connect);
    $qua_total_record = mysql_num_rows($qua_result);
    if (mysql_error()) {
        die(mysql_error());
    }
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
    <div id="edu_content">
        <? include "../lib/sub/education.php"; ?>
    </div>
    <div class="footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->
</body>
</html>