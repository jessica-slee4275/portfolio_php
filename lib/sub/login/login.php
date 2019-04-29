<div id="col2">
	<div class = "title">
		Login
	</div>
	<form name="member_form" method="post" action="../lib/sub/login/login_check.php"> 
	
	<div id="login_form">
		<p id ="login_txt" class = "text-align-center">Please input your ID and Password.</p>
			<div class="clear"></div>

			<div id="login1">
				<img src="../img/login.png">
			</div>
			<div id="login2">
				<div>
					<div class="float-left">
						<ul style =" margin-right: 15px;">
							<li class = "margin-top-20 margin-bottom-40">I D</li>
							<li class = "margin-top-20">PW</li>
						</ul>
					</div>
					<div class="float-left">
						<ul>
							<li><input type="text" name="id" class="login_input"></li>
							<li><input type="password" name="pass" class="login_input"></li>
						</ul>						
					</div>
					<div class="float-left button">
						<button class="btn_login btn-info" role="button" >login</button>
					</div>
				</div>
				<div class="clear"></div>
				<div id="joinus"><a href="../join/join.php">Join us!</a></div>
			</div>			 
	</div> <!-- end of form_login -->

	</form>
	</div> <!-- end of col2 -->