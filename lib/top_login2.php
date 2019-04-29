<div class="header">
	<div id="logo" class="headerLogo">
  		<a href="../index.php" class="logo" ><img id="mainLogo" src="../img/mainLogo.png"></a>
  	</div>

	<div id="top_login" class="header-right">
<?
    if(!$userid)
	{
?>
	<a href="../login/login.php">
		<span class="glyphicon glyphicon-log-in"></span> Login
	</a> 
	<a href="../join/join.php">
		<span class="glyphicon glyphicon-user"></span> Sign Up
	</a>
<?
	}
	else
	{
?>
	<a href="../login/view_account.php">
	<span class="glyphicon glyphicon-user"></span> <?=$usernick?> (level:<?=$userlevel?>)
	</a>
	<a href="../lib/sub/login/logout.php">
		<span class="glyphicon glyphicon-log-in"></span> Logout
	</a> 
		
<?
	}
?>
	 </div>
