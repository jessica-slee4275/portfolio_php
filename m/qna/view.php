<? 
	session_start(); 
	include "../../lib/dbconn.php";

	$sql = "select * from $table where num=$num";
	$result = mysql_query($sql, $connect);
    $row = mysql_fetch_array($result);       
	
	$item_num     = $row[num];
	$item_id      = $row[id];
	$item_name    = $row[name];
  	$item_nick    = $row[nick];
	$item_hit     = $row[hit];
    $item_date    = $row[regist_day];
	$item_subject = str_replace(" ", "&nbsp;", $row[subject]);
	$item_content = $row[content];
	$is_html      = $row[is_html];

	if ($is_html!="y")
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}

	$new_hit = $item_hit + 1;
	$sql = "update $table set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
	mysql_query($sql, $connect);
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
    <div id="content">
	    <? include "../lib/sub/qna/view.php"; ?>
    </div>  <!-- end of menu --> 
    <div class="footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->

</body>
</html>