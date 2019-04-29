<? 
$mobile = array("iPhone", "iPod","BlackBerry", "Android", "Windows CE", "Windows CE;", "LG", "MOT", "SAMSUNG", "SonyEricsson",  "Symbian", "Opera Mobi", "Opera Mini", "IEmobile");
$page = explode("/", $_SERVER["PHP_SELF"]); 

for($i = 0 ; $i < count($mobile) ; $i++)
{
  if(strpos($_SERVER["HTTP_USER_AGENT"],$mobile[$i]) == true)
  {
    if($page[1]==="proto"){
      header("Location: ../m/$page[2]/$page[3]");
    }
    else{
      header("Location: ../m/$page[1]/$page[2]");
    }
    exit;
  }
}
?>