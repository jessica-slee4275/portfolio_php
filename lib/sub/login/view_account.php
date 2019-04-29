<? include "../../../lib/dbconn.php"; ?>
<div id="col2">
    <form  name="member_form" method="post" action="modify.php"> 
    <div class = "title">
        My Account
    </div>
    <div id="form_join">
    <div id="join1">
    <ul>
        <li style="padding-bottom: 7%;"><span>*</span> ID</li>
        <li><span>*</span> Password</li>
        <li><span>*</span> Confirmed password</li>
        <li><span>*</span> Name</li>
        <li><span>*</span> Nickname</li>
        <li><span>*</span> Phone</li>
        <li>&nbsp;&nbsp;&nbsp;Email</li>
    </ul>
    </div>
    <div id="join2">
        <ul>
        <li><?= $row[id] ?></li>
        <li><input type="password" name="pass" value="<?= $row[pass] ?>"></li>
        <li><input type="password" name="pass_confirm" value="<?= $row[pass] ?>"></li>
        <li><input type="text" name="name" value="<?= $row[name] ?>"></li>
        <li><div id="nick1"><input type="text" name="nick" value="<?= $row[nick] ?>"></div>
            <div id="nick2" >
            <a id ="btn_checkID" href="#" class="btn btn-info" role="button" onclick="return check_nick();" >Check Nickname</a>
            </div>
        </li>
        <li><input type="text" class="inline" name="hp1" value="<?= $hp1 ?>" maxlength="3"> 
            - <input type="text" class="inline" name="hp2" value="<?= $hp2 ?>" maxlength="3"> 
            - <input type="text" class="inline" name="hp3" value="<?= $hp3 ?>" maxlength="3">
        </li>
        <li><input type="text" id="email" name="email" value="<?= $email ?>"></li>
        </ul>
    </div>
        <div class="clear"></div>
        <div id="must" class="content_detail"><span>*</span> is required.</div>
    </div>

    <div class="button">
        <a id ="btn_save" href="#" class="btn btn-info" role="button" onclick="return check_input();" >Save</a>
        <a id ="btn_reset" href="#" class="btn btn-info" role="button" onclick="return reset_form();" >Reset</a>
    </div>
    </form>
</div>