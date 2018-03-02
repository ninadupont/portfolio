

$(document).ready(function() {
    $(".scroll").click(function(event){
        $('html, body').animate({scrollTop: '+=250px'}, 300, 'linear');
    });
});


// this will make the dive button dissapear when scrolling down and apear when going to the top
  $(window).bind('scroll', function() {
       if ($(window).scrollTop() > 80) {
           $('.about__arrow-down').fadeOut();
       }
       else {
           $('.about__arrow-down').fadeIn();
       }
  });


//this will make the svorfish fade in when it comes into view
  window.sr = ScrollReveal({ reset: true });

  sr.reveal('.hola', { duration: 1000 });
  sr.reveal('.subTitle__one', { duration: 1900 });
  sr.reveal('.subTitle__two', { duration: 2000 });
  sr.reveal('.about__tang-left', { duration: 2100 });
  sr.reveal('.about__palm-right', { duration: 2300 });
  sr.reveal('.about__svaerfisk', { duration: 2400 });
  sr.reveal('.about__turtle', { duration: 2000 });
  sr.reveal('.skills__whale', { duration: 2000 });
  sr.reveal('.bubble1', { duration: 2200 });
  sr.reveal('.bubble2', { duration: 2000 });
  sr.reveal('.bubble3', { duration: 2400 });
  sr.reveal('.about__bubble-button', { duration: 2400 });

//modal for work presentation
  // register modal component
  Vue.component('modal', {
    template: '#modal-template'
  })

  // start app
  new Vue({
    el: '#treasure-modal',
    data: {
      showModal: false
    }
  })



  new Vue({
      el: '#app',
      data: {
          isOpen: false
      },
      methods:{
          toggle: function(){
              this.isOpen = !this.isOpen
          }
      }
  });




  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
