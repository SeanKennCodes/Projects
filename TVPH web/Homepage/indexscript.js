
'use strict';

// // modal variables
// const modal = document.querySelector('[data-modal]');
// const modalCloseBtn = document.querySelector('[data-modal-close]');
// const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// // modal function
// const modalCloseFunc = function () { modal.classList.add('closed') }

// // modal eventListener
// modalCloseOverlay.addEventListener('click', modalCloseFunc);
// modalCloseBtn.addEventListener('click', modalCloseFunc);





// notification toast variables
// const notificationToast = document.querySelector('[data-toast]');
// const toastCloseBtn = document.querySelector('[data-toast-close]');

// // notification toast eventListener
// toastCloseBtn.addEventListener('click', function () {
//   notificationToast.classList.add('closed');
// });





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}





// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}

document.getElementById('txt').oninput = function() {
  const p = document.getElementById('parag');
  const r = new RegExp(`(${this.value})`, 'gi');
  p.InnerHTML = p.textContent.replace(r, '<mark>$1</mark>');
};

var target_mili_sec = new Date("December 30, 2024 00:00:00").getTime();
          function timer() {
              var now_mili_sec = new Date().getTime();
              var remaining_sec = Math.floor( (target_mili_sec - now_mili_sec) / 1000 );

               if (remaining_sec < 0) {
                document.querySelector("#day").innerHTML = 0;
                document.querySelector("#hour").innerHTML = 0;
                document.querySelector("#min").innerHTML = 0;
                document.querySelector("#sec").innerHTML = 0;
                clearInterval(interval); // Stop the timer
                return;
            }

              var day = Math.floor(remaining_sec / (3600 * 24));
              var hour = Math.floor((remaining_sec % (3600 * 24)) / 3600);
              var min = Math.floor((remaining_sec % 3600) / 60);
              var sec = Math.floor(remaining_sec % 60);

              document.querySelector("#day").innerHTML = day;
              document.querySelector("#hour").innerHTML = hour;
              document.querySelector("#min").innerHTML = min;
              document.querySelector("#sec").innerHTML = sec;
          }

          setInterval(timer, 1000);




  var target_mili_sec = new Date("January 20, 2025 00:00:00").getTime();
          function oras() {
              var now_mili_sec = new Date().getTime();
              var remaining_sec = Math.floor( (target_mili_sec - now_mili_sec) / 1000 );

               if (remaining_sec < 0) {
                document.querySelector("#araw").innerHTML = 0;
                document.querySelector("#hours").innerHTML = 0;
                document.querySelector("#minuto").innerHTML = 0;
                document.querySelector("#segundo").innerHTML = 0;
                clearInterval(interval); // Stop the timer
                return;
            }

              var day = Math.floor(remaining_sec / (3600 * 24));
              var hour = Math.floor((remaining_sec % (3600 * 24)) / 3600);
              var min = Math.floor((remaining_sec % 3600) / 60);
              var sec = Math.floor(remaining_sec % 60);

              document.querySelector("#araw").innerHTML = araw;
              document.querySelector("#hours").innerHTML = hours;
              document.querySelector("#minuto").innerHTML = minuto;
              document.querySelector("#segundo").innerHTML = segundo;
          }

          setInterval(timer, 1000);



let slideIndex = 0;
showSlides();

function sliderItem() {
  let i;
  let slides = document.getElementsByClassName("sliderItem");
  // let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}