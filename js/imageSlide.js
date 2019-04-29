
function moveSlides(groupName, n) {
    var modifiedGroupClassName = 'mySlides ' + groupName;
    var slides = document.getElementsByClassName(modifiedGroupClassName);
    var currentSlideIdx = 0;
    var showIdx = 0;

    if(slides.length > 0)
    {
        for(var i = 0; i < slides.length; i++)
        {
            if(slides[i].style.display == 'block'){
                currentSlideIdx = i;
                break;
            }
        }

        showIdx = i + n;

        if(showIdx < 0){showIdx = slides.length - 1;}
        if(showIdx > slides.length - 1){showIdx = 0;}

        showSlides(groupName, showIdx);
    }
}

function currentSlide(groupName, n) {
  showSlides(groupName, n);
}

function showSlides(groupName, n) {
    var modifiedGroupClassName = 'mySlides ' + groupName;
    var modifiedDotClassName = 'dot ' + groupName;
    var i;
  var slides = document.getElementsByClassName(modifiedGroupClassName);
  var dots = document.getElementsByClassName(modifiedDotClassName);
  
  if(slides.length == 0){
    return;    
  }

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[n].style.display = "block";  
  dots[n].className += " active";
}