<div id="col2">
    <form  name="member_form" method="post" action="../lib/sub/join/insert.php"> 
    <div class = "title">
        Join us
    </div>

    <div id="form_join">
        <div id="join1">
            <ul>
                <li><span>*</span> ID</li>
                <li><span>*</span> Password</li>
                <li style = "margin-top: -1%;"><span>*</span> Confirmed password</li>
                <li style = "margin-top: -1.5%;"><span>*</span> Name</li>
                <li style = "margin-top: -2%;"><span>*</span> Nickname</li>
                <li style = "margin-top: -0.5%;"><span>*</span> Phone</li>
                <li style = "margin-top: -3%;">&nbsp;&nbsp;&nbsp;Email</li>
            </ul>
        </div>
        <div id="join2">
            <ul>
                <li><div id="id1" class= "inline"><input type="text" name="id" max-length="12"></div>
                    <div id="id2" class= "inline">
                        <a id ="btn_checkID" href="#" class="btn btn-info" role="button" onclick="return check_id();" >Check ID</a>    
                    </div>
                    <div id="id3">4~12 English, number and a special symbol(_) are allowed. </div>
                </li>
                <li><input type="password" name="pass"></li>
                <li><input type="password" name="pass_confirm"></li>
                <li><input type="text" name="name"></li>
                <li><div id="nick1" class= "inline"><input type="text" name="nick"></div>
                    <div id="nick2" class= "inline">
                    <a id ="btn_checkID" href="#" class="btn btn-info" role="button" onclick="return check_nick();" >Check Nickname</a>
                    </div>
                </li>
                <li><div id ="phone"><input type="text" class="hp" name="hp1" maxlength="3">  - <input type="text" class="hp" name="hp2"maxlength="3"> - <input type="text" class="hp" name="hp3"maxlength="4"></li>
                <li><input type="email" id="email" name="email"></li>
            </ul>
        </div>
        <div class="clear"></div>
        <div id="must" class= "content_detail"><span>*</span> is required.</div>
    </div>

    <div class="button">
        <a id ="btn_save" href="#" class="btn btn-info" role="button" onclick="return check_input();" >Save</a>
        <a id ="btn_reset" href="#" class="btn btn-info" role="button" onclick="return reset_form();" >Reset</a>
    </div>
    </form>
	</div> <!-- end of col2 -->