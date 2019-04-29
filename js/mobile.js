function mobileMenu() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
  $(document).ready(function() {
    var detail = "";
    for(var i=1; i< 5; i++) {
        detail = "exp_detail_m_list_" + i;
        detail = document.getElementsByClassName(detail);
        $(detail).hide();
    }
    $("[id^=exp_table]").each(function(){
        $(this).click(function() {
            $(".exp_detail_m_list_" + $(this).attr('id').replace('exp_table_','')).toggle();
        });
    });
});
