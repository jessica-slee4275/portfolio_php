
<?
   if(!$id) 
   {
      echo("Please input your ID");
   }
   else
   {
        include "../../../lib/dbconn.php";
 
      $sql = "select * from member where id='$id' ";

      $result = mysql_query($sql, $connect);
      $num_record = mysql_num_rows($result);
    
      if ($num_record)
      {
         echo "ID is registered ID, <br>";
         echo "please input another ID.<br>";
      }
      else
      {
         echo "Available ID!";
      }
    
      mysql_close();
   }
?>

