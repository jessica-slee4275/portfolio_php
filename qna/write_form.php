<? include "../lib/toMobile.php"; ?>
<?
    session_start();
    if ($mode=="modify" || $mode=="response")
	{
		include "../lib/dbconn.php";

		$sql = "select * from $table where num=$num";
		$result = mysql_query($sql, $connect);
		$row = mysql_fetch_array($result);       
	
		$item_subject     = $row[subject];
		$item_content     = $row[content];

		if ($mode=="response")
		{
			$item_subject = "[re]".$item_subject;
			$item_content = ">".$item_content;
			$item_content = str_replace("\n", "\n>", $item_content);
			$item_content = "\n\n".$item_content;
		}
		mysql_close();
	}

?>
<!DOCTYPE html>
<html>
<head> 
<? include "../lib/head.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/board.css">
</head>
<body>
<div id="wrap">
    <div id="header">
        <? include "../lib/top_login2.php"; ?>
	</div>  <!-- end of header -->
	<div id="menu">
	    <? include "../lib/top_menu2.php"; ?>
    </div>  <!-- end of menu --> 
    <div id="content">
	    <? include "../lib/sub/qna/write_form.php"; ?>
    </div>  <!-- end of menu --> 
    <div class="footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->

</body>
</html>