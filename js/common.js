$(document).ready(function() {
    var detail = "";
    for(var i=1; i< 5; i++) {
        detail = "exp_detail_list_" + i;
        detail = document.getElementsByClassName(detail);
        $(detail).hide();
    }
    $("[id^=exp_table]").each(function(){
        $(this).click(function() {
            $(".exp_detail_list_" + $(this).attr('id').replace('exp_table_','')).toggle();
        });
    });

});
function del(href) 
    {
        if(confirm("If you delete this, it can not be able restore anymore. \n\n Are you sure that you want to do this?")) {
                document.location.href = href;
        }
    }

    /* join start */
    //$(document).ready(function() {
        $("input").bind("input", function() {
            var $this = $(this);
            setTimeout(function() {
                if ( $this.val().length >= parseInt($this.attr("maxlength"),10) )
                    $this.next("input").focus();
            },0);
      //  });
});
function check_id()
   {
     window.open("../lib/sub/join/check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("../lib/sub/join/check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.id.value)
      {
          alert("Please input your ID");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value)
      {
          alert("Please input your password");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("Please input confirmed password");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("Please input your name");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("Please input your nickname");    
          document.member_form.nick.focus();
          return;
      }


      if (!document.member_form.hp1.value || !document.member_form.hp2.value ||!document.member_form.hp3.value )
      {
          alert("Please input your phone"); 
            if(!document.member_form.hp1.value)   
                document.member_form.hp1.focus();
            if(!document.member_form.hp2.value)   
                document.member_form.hp2.focus();
            if(!document.member_form.hp3.value)   
                document.member_form.hp3.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("Wrong password! please input right password.");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }
  
   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email.value = "";
	  
      document.member_form.id.focus();

      return;
   }

       /* join end */
