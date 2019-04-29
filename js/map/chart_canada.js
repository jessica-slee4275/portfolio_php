
  var map = AmCharts.makeChart( "chartdiv_canada", {
    "type": "map",
    "theme": "light",
    "areasSettings": {
      "color": "rgba(129,129,129,1)",
      "autoZoom": false,
      "selectedColor": "#017ab2",
      "selectable": false
    },
    "dataProvider": {
      "map": "canadaLow",
      "getAreasFromMap": true,
      "areas": [ 
      {
        "id": "CA-ON",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      },
      {
        "id": "CA-BC",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      },
      {
        "id": "CA-QC",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }
     ]
    },
    "export": {
      "enabled": true
    },
    "listeners": [{
      "event": "clickMapObject",
      "method": function(e) {
        var state = document.getElementById('state');
        // Ignore any click not on area
        if (e.mapObject.objectType !== "MapArea")
          return;
        
        var area = e.mapObject;
        if(area.id != null){
          $('.div_state').hide();
        $('.btn_state').hide();

        $("#" + area.id).show();
        $("#btn_" + area.id).show();
        
        $('.modal').animate({
          scrollTop: 500},
          500);
        }
      }
    }]
  } );

  $( document ).ready(function() {
   
    $('.btn_top').click(function(){
      $('.modal').animate({scrollTop : 0},800);
      return false;
   });
    $('.btn_close').click(function(){
      $('.modal').hide();
    });
    $(".btn_select").click(function(){
      $('.modal').animate({scrollTop : 1500},800).delay(9999999);
      $(this).css({
        "background-color":"#008CBA",
        "color":"white"});
      $(this).siblings().css({
        "background-color":"white",
        "color":"black"});
  
        // show slide
        var cityId = $(this).data('city');
        $('#ct_' + cityId + ',#slide_' + cityId + ',#dot_' + cityId).show();
    });
    
  
  });
 
 