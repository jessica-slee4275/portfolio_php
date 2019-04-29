<div id="col2">
<div class = "title">
    Experience
</div>
<hr>
<?		
   for ($i=0; $i < $total_record; $i++)                    
   {
      mysql_data_seek($result, $i);       
      $row = mysql_fetch_array($result);       
    
      $list_id      = $row[list_id];
	  $title        = $row[title];
      $company      = $row[company];
      $company_sub  = $row[company_sub];
      $pic          = $row[pic];
      $use_lan      = $row[use_lan];
      $region       = $row[region];
      $country      = $row[country];
      $country_icon = $row[country_icon];
      $start_date   = $row[start_date];
      $end_date     = $row[end_date];

    $sql_detail = "select * from experience_detail where list_id='".$list_id."'" ;
    $detail_result = mysql_query($sql_detail, $connect);
    $detail_total_record = mysql_num_rows($detail_result);
?>


<table id="exp_table_<?=$list_id?>" class="table">
    <tr>
        <td class = "pic width-15" rowspan="10">
            <?= $pic ?>
        </td>
        <td class="content content_title width-60">
            <?= $title ?>
        </td>
        <td id = "exp_date" class="content content_detail width-20">
            <?= $start_date ?> ~<?= $end_date ?>
        </td>
    </tr>
    <tr>
        <td>
            <ul class ="exp_ul">
                <li id ="exp_company"class="content content_detail"><?= $company ?></li>
                <li id ="exp_sub_title"class="content content_detail italic"><?= $company_sub ?></li>
            </ul>
        </td>
        <td class = "exp_region">
            <ul>
                <ul id  = "exp_region_text" class= "inline">
                    <li id ="exp_region_title" class="content content_detail"><?= $region ?></li>
                    <li id ="exp_country_title" class="content content_detail"><?= $country ?></li>
                </ul>
                <li id ="exp_country_icon" class="inline"><?= $country_icon ?></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td id ="use_lan" class="content content_detail italic" colspan ="2">
            <?= $use_lan ?>
        </td>
    </tr>
<? 
    
    for($j=0; $j < $detail_total_record; $j++)
    { 
        mysql_data_seek($detail_result, $j);       
        $detail_row = mysql_fetch_array($detail_result);       
        $list_id    = $detail_row[list_id];
        $detail     = $detail_row[detail];
?>
    <tr class="exp_detail_list_<?=$list_id?>">
        <td class="content content_detail" colspan ="2">
            <?= $detail ?>
        </td>
    </tr>
   <? }?>
</table>
<?
   }
?> 
<div>
