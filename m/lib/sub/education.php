<div id="col2">
<div class = "title">
    Education
</div>
<hr>
<?		
   for ($i=0; $i < $edu_total_record; $i++)                    
   {
      mysql_data_seek($edu_result, $i);       
      $edu_row = mysql_fetch_array($edu_result);       
	
	  $edu_title     = $edu_row[title];
	  $edu_sub_title = $edu_row[sub_title];
      $edu_pic       = str_replace("../img", "../../img", $edu_row[pic]);
	  $edu_detail    = $edu_row[detail];
      $edu_fin_date  = $edu_row[fin_date];
?>


<table class="table">
    <tr>
        <td class="pic width-20">
            <?= $edu_pic ?>
        </td>
        <td class="width-60">
            <ul style= "list-style: none;">
                <li class="content content_title"><?= $edu_title ?></li>
                <li class="content content_detail"><?= $edu_sub_title ?></li>
                <li class="content content_detail italic"><?= $edu_detail?></li>
            </ul>
        </td >
        <td class="width-20 content content_detail date">
            <?= $edu_fin_date ?>
        </td>
    </tr>
</table>
<?
   }
?>
<div class = "title">
    Qualification
</div>
<hr>
<?		
   for ($i=0; $i < $qua_total_record; $i++)                    
   {
      mysql_data_seek($qua_result, $i);       
      $qua_row = mysql_fetch_array($qua_result);       
	
	  $qua_title     = $qua_row[title];
	  $qua_sub_title = $qua_row[sub_title];
      $qua_pic       = str_replace("../img", "../../img", $qua_row[pic]);
	  $qua_detail    = $qua_row[detail];
      $qua_fin_date  = $qua_row[fin_date];
?>


<table class="table">
    <tr>
        <td class="width-20">
            <?= $qua_pic ?>
        </td>
        <td class="width-60">
            <ul style= "list-style: none;">
                <li class="content content_title"><?= $qua_title ?></li>
                <li class="content content_detail"><?= $qua_sub_title ?></li>
            </ul>
        </td >
        <td class="width-20 content content_detail date">
            <?= $qua_fin_date ?>
        </td>
    </tr>
</table>
<?
   }
?>
</div>