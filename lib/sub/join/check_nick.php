
<?
   if(!$nick) 
   {
      echo("Please inpu tyour nickname");
   }
   else
   {
      include "../../../lib/dbconn.php";
 
      $sql = "select * from member where nick='$nick' ";

      $result = mysql_query($sql, $connect);
      $num_record = mysql_num_rows($result);

      if ($num_record)
      {
        echo "ID is registered Nickname, <br>";
        echo "please input another Nickname.<br>";
      }
      else
      {
         echo "Available nickname!";
      }
    
      mysql_close();
   }
?>

