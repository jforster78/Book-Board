// 'use strict';

// Toggle Menu       
const menuToggle = (() => {
  // Build the menu toggle
  const buildTheToggle = () => {
    const navs = document.querySelectorAll(".header__navlink");
    navs.forEach(nav => nav.classList.toggle("header__navshow"));
  };
  // Build the menu button animation
  const toggleButton = () => {
    const bars = document.querySelector(".header__navbutton");
    bars.classList.toggle("header__navbutton--change");
  };
  // Toggles menu opened/closed
  const toggleEventListener = document.querySelector(".header__navbutton");
  toggleEventListener.addEventListener("click", () => {
    buildTheToggle();
    toggleButton();
  });
})();
  

// SlideShow
const slideShow = (() => {
  const slides = document.getElementsByClassName("grid__slides");
  let slideIndex = 0;
  // Timer
  const timer = () => {
    setInterval(() => {
      nextSlide();
    }, 15000); //15 seconds
  };
  // Next slide
  const nextSlide = () => {
    //Dispaly none of the slides
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slideIndex < slides.length
      ? (slideIndex = slideIndex + 1)
      : (slideIndex = 1);
    // Display the next slide
    slides[slideIndex - 1].style.display = "block";
  };
  const nextSlideEventListener = document.querySelector(".next");
  nextSlideEventListener.addEventListener("click", () => {
    nextSlide();
  });
  // Previous slide
  const prevSlide = () => {
    // Display none of the slides
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slideIndex < slides.length + 1 && slideIndex > 1
      ? (slideIndex = slideIndex - 1)
      : (slideIndex = slides.length);
    // Display the previous slide
    slides[slideIndex - 1].style.display = "block";
  };
  const prevSlideEventListener = document.querySelector(".prev");
  prevSlideEventListener.addEventListener("click", () => {
    prevSlide();
  });

  nextSlide(); // Display first slide
  timer(); // Start timer
})();


// Elements in View
const inView = (() => {
  var elements;
  var windowHeight;

  // Builds a NodeList of hidden classes
  function init() {
    elements = document.querySelectorAll('.hidden');
    windowHeight = window.innerHeight;
  }

  // Checks each element and calculates if they are visable
  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      // If they are visable remove hidden class 
      // and replace with fade-in-elements class
      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('fade-in-element');
        element.classList.remove('hidden');
      }
    }
  }
  // On scroll.
  window.addEventListener('scroll', checkPosition);
  window.addEventListener('resize', init);

  // calls the functions
  init();
  checkPosition();
})();


// To the top
const toTheTop = (() => {
  // On scroll
  window.onscroll = () => {
    // Show button once scrolled down more than 350px
    const scrollDown = () => {
      window.scrollY > 350
        ? (document.querySelector(".backToTheTop").style.display = "block")
        : (document.querySelector(".backToTheTop").style.display = "none");
    };
    scrollDown();
  };
  // Scroll step
  let intervalId = 0;
  const scrollStep = () => {
    window.scrollY === 0
      ? clearInterval(intervalId)
      : window.scroll(0, window.scrollY -250);
  };
  // Scroll every 16 milliseconds
  const scrollToTop = () => {
    intervalId = setInterval(() => {
      scrollStep();
    }, 25); // 25 milliseconds
  };
  // On scroll back to the top
  const scrollButtonEventListener = document.querySelector(".backToTheTop");
  scrollButtonEventListener.addEventListener("click", () => {
    scrollToTop();
  });
})();


// Validates Form
const validationForm = (() => {
  // Validates inputs
  const ValidationEvent = (e) => {
    e.preventDefault();
    // Variables for input values
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let message = document.getElementById("message").value;
    let msg = document.getElementById("msg");
    // Regular expression for email address
    let emailReg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
    // Condition of inputs
    if (fullname !== '' && email !== '' && phone !=='' && message !== '') {
      if (email.match(emailReg)) {
        if (phone.length > 7) {
          msg.textContent = "Thank you. Someone will be in Touch soon.";
          msg.className = "grid__successMsg";
          const reset = document.getElementById("contactForm");
          reset.reset();
          return false;
        } else {
          msg.textContent = "Please enter a valid phone number";
          return false;
        }
      } else {
        msg.textContent = "Please enter a valid email address";
        return false;
      }
    } else {
      msg.textContent = "All fields are required.";
      return false;
    }
  }
  // On click display message
  const submitEventListener = document.getElementById("submit");
  submitEventListener.addEventListener("click", ValidationEvent);
})();


// Copyright Date
const copyright = (() => {
  // Get current date.
  const copyright = new Date();
  // Set current year.
  // @ts-ignore
  document.getElementById("date").innerHTML = copyright.getFullYear();
})();