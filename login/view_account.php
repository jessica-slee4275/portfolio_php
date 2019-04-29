<? include "../lib/toMobile.php"; ?>
<?
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head> 
        <? include "../lib/head.php"; ?>
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
                <? include "../lib/sub/login/view_account.php"; ?>
            </div>  <!-- end of menu --> 
            <div class= "footer">
                <? include "../lib/footer.php"; ?>
            </div>  <!-- end of header -->
        </div> <!-- end of wrap -->
    </body>
</html>