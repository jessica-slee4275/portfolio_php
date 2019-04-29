<div id="col2">        
	<div class = "title">
        QnA
    </div>
    <div class="clear"></div>

    <div id="write_form_title">
        write
    </div>
    <div class="clear"></div>
<?
	if($mode=="modify")
	{
?>
		<form  name="board_form" method="post" action="../lib/sub/qna/insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>"> 
<?
	}
	elseif ($mode=="response")
	{
?>
		<form  name="board_form" method="post" action="../lib/sub/qna/insert.php?mode=response&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>"> 
<?
	}
	else
	{
?>
		<form  name="board_form" method="post" action="../lib/sub/qna/insert.php?table=<?=$table?>"> 
<?
	}
?>
		<div id="write_form">
			<div class="write_line"></div>
			<div id="write_row1">
				<div class="col1"> nickname </div>
				<div class="col2"><?=$usernick?></div>
<?
	if( $userid && ($mode != "modify")  && ($mode != "response") )
	{
?>
				<div class="col3"><input type="checkbox" name="html_ok" value="y"> write HTML</div>
<?
	}
?>
			</div>
			<div class="write_line"></div>
			<div id="write_row2"><div class="col1"> Title   </div>
			                     <div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row3"><div class="col1"> Content   </div>
			                     <div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
			</div>
			<div class="write_line"></div>
		</div>
        <div class = "btn_ok">
        <button id ="btn_ok" type="submit" class="btn btn-info">OK</button>
        </div>
		<div id="write_button">
        
        <a id ="list_button" href="list.php?table=<?=$table?>&page=<?=$page?>" class="btn btn-info" role="button" >list</a>
		</div>
		</form>

	</div> <!-- end of col2 -->