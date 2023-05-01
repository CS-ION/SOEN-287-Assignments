let slide = 1;
slideShow(slide);

function nextSlide(n) {
  slideShow(slide += n);
}

function slideShow(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slide = 1}    
  if (n < 1) {slide = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slide-1].style.display = "block";  
}