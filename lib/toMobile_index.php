<? 
$mobile = array("iPhone", "iPod","BlackBerry", "Android", "Windows CE", "Windows CE;", "LG", "MOT", "SAMSUNG", "SonyEricsson",  "Symbian", "Opera Mobi", "Opera Mini", "IEmobile");
$page = basename($_SERVER["PHP_SELF"]);
for($i = 0 ; $i < count($mobile) ; $i++)
{
  if(strpos($_SERVER["HTTP_USER_AGENT"],$mobile[$i]) == true)
  {
    if($page){
      header("Location: ./m/$page");
    }
    else{
      header("Location: ./m/index.php");
    }
    exit;
  }
  
}
?>