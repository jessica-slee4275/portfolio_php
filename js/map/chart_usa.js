
var map = AmCharts.makeChart( "chartdiv_usa", {
    "type": "map",
    "theme": "light",
    "areasSettings": {
      "color": "rgba(129,129,129,1)",
      "autoZoom": false,
      "selectedColor": "#017ab2",
      "selectable": false
    },
    "dataProvider": {
      "map": "usaLow",
      "getAreasFromMap": true,
      "areas": [ 
      {
        "id": "US-CA",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }, {
        "id": "US-FL",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }, {
        "id": "US-IL",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }, {
        "id": "US-NV",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }, {
        "id": "US-NY",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }, {
        "id": "US-WA",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }, {
        "id": "US-DC",
        "color": "#67b7dc",
        "autoZoom":true,
        "selectable": true
      }]
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
        // Toggle showAsSelected
        // area.showAsSelected = !area.showAsSelected;
        // e.chart.returnInitialColor(area);
        
        // Update the list
        //document.getElementById("selected").innerHTML = JSON.stringify(getSelectedCountries());
      }
    }]
  } );
$( document ).ready(function() {
  $('.city-content').hide();
   $(".btn_city").click(function(){
     $('.city-content').hide();
  //   var id = $(this).attr('id');
  //   var city_id = "#ct_"+id;
  //   //$(city_id).show();
    
  //   $(".btn_city").css({
  //       "background-color":"white",
  //       "color":"black" 
  //   })
    
  //   // $('.modal').animate({
      
  //   //   scrollTop:1000},
  //   //   500);
   });
  $('.btn_top').click(function(){
    $('.modal').animate({scrollTop : 0},800);
    return false;
  });
  $('.btn_close').click(function(){
    $('.modal').hide();
  });
  $(".btn_select").click(function(){
    
    $('#scrollTop').click(function(){
      $('.modal').animate({scrollTop : 0},800);
      return false;
    });
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
