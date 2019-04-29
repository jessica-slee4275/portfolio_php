<?
    session_start();
    $id = $_POST[id];
    $pass = $_POST[pass];
       // 이전화면에서 이름이 입력되지 않았으면 "이름을 입력하세요"
       // 메시지 출력
       if(!$id) {
         echo("
               <script>
                 window.alert('Please input your ID')
                 history.go(-1)
               </script>
             ");
             exit;
       }
    
       if(!$pass) {
         echo("
               <script>
                 window.alert('Please input your password')
                 history.go(-1)
               </script>
             ");
             exit;
       }
    
       include "../../../lib/dbconn.php";
    
       $sql = "select * from member where id='$id'";
       $result = mysql_query($sql, $connect);
    
       $num_match = mysql_num_rows($result);
       if(!$num_match) 
       {
         echo("
               <script>
                 window.alert('Unregistered ID!')
                 history.go(-1)
               </script>
             ");
        }
        else
        {
            $row = mysql_fetch_array($result);
    
            $db_pass = $row[pass];
    
            if($pass != $db_pass)
            {
               echo("
                  <script>
                    window.alert('Wrong Password!')
                    history.go(-1)
                  </script>
               ");
    
               exit;
            }
            else
            {
               $userid = $row[id];
               $username = $row[name];
               $usernick = $row[nick];
               $userlevel = $row[level];
    
               $_SESSION['userid'] = $userid;
               $_SESSION['username'] = $username;
               $_SESSION['usernick'] = $usernick;
               $_SESSION['userlevel'] = $userlevel;
    
               echo("
                  <script>
                    location.href = '../../../index.php?$userid&$username';
                  </script>
               ");
            }
       }         
?>