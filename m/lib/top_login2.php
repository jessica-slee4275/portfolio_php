<div class="header">
	
	<div style="width: 30%; float:left;">
		<button class="menu_btn_mobile" onclick="window.open('https://developmentstudyrecord.wordpress.com/');">Blog</button>
	</div>
	<div id="top_login" class="header-right m_login">
	
<?
    if(!$userid)
	{
?>
	<a href="../login/login.php" class="m_loginHeader" style ="width:50%;">
		<span class="glyphicon glyphicon-log-in "></span> Login
	</a> 
	<a href="../join/join.php" class="m_loginHeader">
		<span class="glyphicon glyphicon-user"></span> Sign Up
	</a>
<?
	}
	else
	{
?>
	<a href="../login/view_account.php" class="m_loginHeader" style ="width:50%;">
	<span class="glyphicon glyphicon-user"></span> <?=$usernick?> (level:<?=$userlevel?>)
	</a>
	<a href="../lib/sub/login/logout.php" class="m_loginHeader">
		<span class="glyphicon glyphicon-log-in"></span> Logout
	</a> 
		
<?
	}
?>
	
	 </div>
