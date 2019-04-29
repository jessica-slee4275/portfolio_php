
<div id="col2">        
	<div class = "title" style="margin-left:-2%;">
		QnA
	</div>
	<form  name="board_form" method="post" action="list.php?table=<?=$table?>&mode=search" style="overflow:auto; margin-bottom: 10px;"> 
	<div id="list_search">
		<div id="list_search1">▷ total <?= $total_record ?> content(s).  </div>
		<div style="float:right;">
			<div id="list_search3">
				<select name="find">
					<option value='subject'>title</option>
					<option value='content'>content</option>
					<option value='nick'>nickname</option>
					<option value='name'>name</option>
				</select></div>
			<div id="list_search4"><input type="text" name="search"></div>
			<div id="list_search5">
				<button id ="btn_search" type="button" class="btn btn-info">search</button>
			</div>
		</div>
	</div>
	</form>
	<div class="clear"></div>

	<div id="list_top_title">
		<ul>
			<li id="list_title1">number</li>
			<li id="list_title2">title</li>
			<li id="list_title3">writer</li>
			<li id="list_title4">date</li>
			<li id="list_title5">views</li>
		</ul>		
	</div>

		<div id="list_content">
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysql_data_seek($result, $i);       
      $row = mysql_fetch_array($result);       
	
	  $item_num     = $row[num];
	  $item_id      = $row[id];
	  $item_name    = $row[name];
  	  $item_nick    = $row[nick];
	  $item_hit     = $row[hit];
      $item_date    = $row[regist_day];
	  $item_date = substr($item_date, 0, 10);  
	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);
	  $item_depth = $row[depth];

      $space = "";
      for ($j=0; $j<$item_depth; $j++)
          $space = "&nbsp;&nbsp;".$space;

?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div>
				<div id="list_item2"><?=$space?><a href="view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></div>
				<div id="list_item3"><?= $item_nick ?></div>
				<div id="list_item4"><?= $item_date ?></div>
				<div id="list_item5"><?= $item_hit ?></div>
			</div>
<?
   	   $number--;
   }
?>
			<div id="page_button">
				<div id="page_num">
					<div style="margin-top:10px;"> ◀ pre &nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='list.php?table=$table&page=$i'> $i </a>";
		}      
   }
?>			
		&nbsp;&nbsp;&nbsp;&nbsp;next ▶
			</div>
		</div>
		<div style="text-align:right;">
			<a id ="list_button" href="qna.php?table=<?=$table?>&page=<?=$page?>" class="btn btn-info" role="button" >list</a>
		
				
<? 
	if($userid)
	{
?>
			<a id ="list_button" href="write_form.php?table=<?=$table?>" class="btn btn-info" role="button" >write</a>
		</div>
<?
	}
?>
				</div>
			</div> <!-- end of page_button -->		
        </div> <!-- end of list content -->
		<div class="clear"></div>

	</div> <!-- end of col2 -->