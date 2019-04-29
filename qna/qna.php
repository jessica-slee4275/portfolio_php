<? include "../lib/toMobile.php"; ?>
<?
    session_start();
    $table = "qna";
	include "../lib/dbconn.php";
	$scale=10;			// 한 화면에 표시되는 글 수

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('please input the word!');
			     history.go(-1);
				</script>
			");
			exit;
		}

		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by group_num desc, ord asc";
	}

	$result = mysql_query($sql, $connect);
	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;

?>
<!DOCTYPE html>
<html>
<head> 

<? include "../lib/head.php"; ?>
<script>
    $(document).ready(function(){
		var barMenu = new BarMenu("#barMenu2");
      	barMenu.setSelectMenuItemAt(5, false);
    });
</script>
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
	    <? include "../lib/sub/qna/qna.php"; ?>
    </div>  <!-- end of menu --> 
    <div class="footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->

</body>
</html>