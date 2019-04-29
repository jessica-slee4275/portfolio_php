<? include "../lib/toMobile.php"; ?>
<?
    session_start();
    include "../lib/dbconn.php";
    //ref query
    $ref_sql = "select * from reference";
    $ref_result = mysql_query($ref_sql, $connect);
    $ref_total_record = mysql_num_rows($ref_result);
    if (mysql_error()) {
        die(mysql_error());
    }
?>
<!DOCTYPE html>
<html>
<head> 
<? include "../lib/head.php"; ?>
<script>
    $(document).ready(function(){
      var barMenu = new BarMenu("#barMenu2");
      barMenu.setSelectMenuItemAt(6, false);
    });
</script>
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
    <div class = "title">
      Reference
    </div>
    <hr>
    <table class="table">
      <tr>
        <td>
    <?		
      for ($i=0; $i < $ref_total_record; $i++)                    
      {
        mysql_data_seek($ref_result, $i);       
        $ref_row = mysql_fetch_array($ref_result);      
        $ref_title  = $ref_row[title];
        $ref_oid  = $ref_row[oid];
        $ref_cid  = $ref_row[cid];
        $ref_detail  = $ref_row[detail];
    ?>
      <a href = <?= $ref_detail ?>><p class="content content_detail"><?= $ref_detail ?></p></a>
    <?
      }
    ?>
      </td >
      </tr>
    </table>
    </div>
      </div>
    <div class= "footer">
        <? include "../lib/footer.php"; ?>
    </div>  <!-- end of header -->
</div> <!-- end of wrap -->
</body>
</html>