
	<div id="col2">
		<div class = "title">
			QnA
		</div>

		<div id="view_comment"> &nbsp;</div>

		<div id="view_title">
			<div id="view_title1"><?= $item_subject ?></div><div id="view_title2"><?= $item_nick ?> | view : <?= $item_hit ?>  
			                      | <?= $item_date ?> </div>	
		</div>

		<div id="view_content">
			<?= $item_content ?>
		</div>

        <div id="view_button" style="text-align:right;">
			<a id ="list_button" href="list.php?table=<?=$table?>&page=<?=$page?>" class="btn btn-info" role="button" >list</a>
		
<? 
	if($userid && ($userid==$item_id) )
	{
?>
            <a id ="modify_button" href="write_form.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>"class="btn btn-info" role="button" >modify</a>&nbsp;
            <a id ="delete_button"  href="javascript:del('../lib/sub/qna/delete.php?table=<?=$table?>&num=<?=$num?>')" class="btn btn-info" role="button" >delete</a>&nbsp;
<?
	}
?>
<? 
	if($userid)
	{
?>
            <a id ="response_button" href="write_form.php?table=<?=$table?>&mode=response&num=<?=$num?>&page=<?=$page?>" class="btn btn-info" role="button">response</a>&nbsp;
            <a id ="write_button" href="write_form.php?table=<?=$table?>" class="btn btn-info" role="button">write</a>
<?
	}
?>
		</div>
		<div class="clear"></div>

	</div> <!-- end of col2 -->