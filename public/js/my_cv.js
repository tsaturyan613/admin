

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}


let slideIndexS = 1;
showSlidesS(slideIndexS);

function plusSlidesS(nn) {
  showSlidesS(slideIndexS += nn);
}

function currentSlideS(nn) {
  showSlidesS(slideIndexS = nn);
}

function showSlidesS(nn) {
  let i;
  let slides = document.getElementsByClassName("slider-item");
  if (nn > slides.length) {
  	slideIndexS = 1
  }    
  if (nn < 1) {
  	slideIndexS = slides.length
  }
  for (i = 0; i < slides.length; i++){
      slides[i].style.display = "none";  
  }
  slides[slideIndexS-1].style.display = "block";  
}



let slideIndexT = 1;
showSlidesT(slideIndexT);

function plusSlidesT(nnn) {
  showSlidesT(slideIndexT += nnn);
}

function currentSlideT(nnn) {
  showSlidesT(slideIndexT = nnn);
}

function showSlidesT(nnn) {
  let i;
  let slides = document.getElementsByClassName("slider-item-third");
  if (nnn > slides.length) {
  	slideIndexT = 1
  }    
  if (nnn < 1) {
  	slideIndexT = slides.length
  }
  for (i = 0; i < slides.length; i++){
      slides[i].style.display = "none";  
  }
  slides[slideIndexT-1].style.display = "block";  
}

