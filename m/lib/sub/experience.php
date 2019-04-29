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
      $pic          = str_replace("../img", "../../img", $row[pic]);
      $use_lan      = $row[use_lan];
      $region       = $row[region];
      $country      = $row[country];
      $country_icon = str_replace("../img", "../../img", $row[country_icon]);
      $start_date   = $row[start_date];
      $end_date     = $row[end_date];

    $sql_detail = "select * from experience_detail where list_id='".$list_id."'" ;
    $detail_result = mysql_query($sql_detail, $connect);
    $detail_total_record = mysql_num_rows($detail_result);
?>

<table id="exp_table_<?=$list_id?>" class="content content_detail m_exp_table">
        <tr class = "pic">
            <td id="m_exp_company_pic">
                <?= $pic ?>
            </td>
            <td colspan="2">
                <ul>
                    <li id="m_exp_title" class="content_title">
                    <?= $title ?>
                    </li>
                    <li id ="use_lan" class ="italic content_detail">
                    <?= $use_lan ?>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><?= $company ?></td>
            
            <td id ="exp_sub_title" class ="italic" colspan="2"><?= $company_sub ?></td>
        </tr>
        <tr>
            <td id = "exp_date"><?= $start_date ?> ~<?= $end_date ?></td>
            <td><?= $region ?>, <?= $country ?></td>
            <td><?= $country_icon ?></td>
        </tr>
       
<? 
    
    for($j=0; $j < $detail_total_record; $j++)
    { 
        mysql_data_seek($detail_result, $j);       
        $detail_row = mysql_fetch_array($detail_result);       
        $list_id    = $detail_row[list_id];
        $detail     = $detail_row[detail];
?>
    <tr id ="exp_detail" class="exp_detail_m_list_<?=$list_id?>">
        <td colspan="3"><div style ="display:list-item"> <?= $detail ?></div></td>
    </tr>
   <? }?>
   </table>
   <hr>
<?
   }
?> 

</div>
