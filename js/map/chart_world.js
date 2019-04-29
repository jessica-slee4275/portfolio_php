/**
 * This example uses pulsating circles CSS by Kevin Urrutia
 * http://kevinurrutia.tumblr.com/post/16411271583/creating-a-css3-pulsating-circle
 */

var map = AmCharts.makeChart( "chartdiv", {
    "type": "map",
    "theme": "light",
    "projection": "miller",
  
    "areasSettings": {
      "color": "rgba(129,129,129,1)",
      "autoZoom": false,
      "selectedColor": "#017ab2",
      "selectable": false
    },
    "smallMap": {},
    "export": {
      "enabled": true,
      "position": "bottom-right"
    },
    "dataProvider": {
      "map": "worldLow",
      "getAreasFromMap": true,
      "areas": [
        {
          "id": "CA",
          "title": "Canada",
          "color": "#67b7dc",
          "autoZoom":true,
          "selectable": true
        },
        {
          "id": "KR",
          "title": "South Korea",
          "color": "#67b7dc",
          "autoZoom":true,
          "selectable": true
        },
        {
          "id": "US",
          "title": "United States",
          "color": "#67b7dc",
          "autoZoom":true,
          "selectable": true
        }
      ]
    },
    
    "listeners": [{
      "event": "clickMapObject",
      "method": function(e) {
        var modal_canada = document.getElementById('modal_canada');
        var modal_usa = document.getElementById('modal_usa');
        var modal_korea = document.getElementById('modal_korea');
        // Ignore any click not on area
        if (e.mapObject.objectType !== "MapArea")
          return;
        
        var area = e.mapObject;
        document.getElementById("selected").innerHTML = area.id;
        if(area.id == "CA"){
          modal_canada.style.display = "block";
        }
        if(area.id == "US"){
          modal_usa.style.display = "block";
        }
        if(area.id == "KR"){
          modal_korea.style.display = "block";
        }
        window.onclick = function(event) {
            if (event.target == modal_canada || event.target == modal_usa || event.target == modal_korea) {
              modal_canada.style.display = "none";
              modal_usa.style.display = "none";
              modal_korea.style.display = "none";
              
            }
        }
        // Toggle showAsSelected
        // area.showAsSelected = !area.showAsSelected;
        // e.chart.returnInitialColor(area);
        
        // Update the list
        //document.getElementById("selected").innerHTML = JSON.stringify(getSelectedCountries());
      }
    }]
  } );

  // add events to recalculate map position when the map is moved or zoomed
map.addListener( "positionChanged", updateCustomMarkers );
// function getSelectedCountries() {
//   var selected = [];

//   var modal_canada = document.getElementById('modal_canada');
//   var modal_usa = document.getElementById('modal_usa');
//   var modal_korea = document.getElementById('modal_korea');
//   var span = document.getElementsByClassName("close")[0];
//   for(var i = 0; i < map.dataProvider.areas.length; i++) {
//     if(map.dataProvider.areas[i].showAsSelected){
       
//         selected.push(map.dataProvider.areas[i].id);
//         if(selected == "CA"){
//           modal_canada.style.display = "block";
//         }
//         else if(selected == "US"){
//           modal_usa.style.display = "block";
//         }
//         else if(selected == "KR"){
//           modal_korea.style.display = "block";
//         }
//         span.onclick = function() {
//           modal_canada.style.display = "none";
//           modal_usa.style.display = "none";
//           modal_korea.style.display = "none";
          
//         }
//         window.onclick = function(event) {
//             if (event.target == modal_canada || event.target == modal_usa || event.target == modal_korea) {
//               modal_canada.style.display = "none";
//               modal_usa.style.display = "none";
//               modal_korea.style.display = "none";
              
//             }
//         }
//     }
    
//   }
//   return selected;
// }
  // this function will take current images on the map and create HTML elements for them
  function updateCustomMarkers( event ) {
    // get map object
    var map = event.chart;
  
    // go through all of the images
    for ( var x in map.dataProvider.images ) {
      // get MapImage object
      var image = map.dataProvider.images[ x ];
  
      // check if it has corresponding HTML element
      if ( 'undefined' == typeof image.externalElement )
        image.externalElement = createCustomMarker( image );
  
      // reposition the element accoridng to coordinates
      var xy = map.coordinatesToStageXY( image.longitude, image.latitude );
      image.externalElement.style.top = xy.y + 'px';
      image.externalElement.style.left = xy.x + 'px';
    }
  }
  
  // this function creates and returns a new marker element
  function createCustomMarker( image ) {
    // create holder
    var holder = document.createElement( 'div' );
    holder.className = 'map-marker';
    holder.title = image.title;
    holder.style.position = 'absolute';
  
    // maybe add a link to it?
    if ( undefined != image.url ) {
      holder.onclick = function() {
        window.location.href = image.url;
      };
      holder.className += ' map-clickable';
    }
  /*
    // create dot
    var dot = document.createElement( 'div' );
    dot.className = 'dot';
    holder.appendChild( dot );
  
    // create pulse
    var pulse = document.createElement( 'div' );
    pulse.className = 'pulse';
    holder.appendChild( pulse );
  
    // append the marker to the map container
    image.chart.chartDiv.appendChild( holder );
   */
    return holder;
  }