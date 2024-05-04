
// Iamge Slider JS
const slides = document.querySelectorAll(".slide");
const sliderContainer = document.querySelector(".slider-container");
let counter = 0;

slides.forEach((slide, index) => {
    slide.style.left = `${index * 100}%`;
});

const goPrev = () => {
    counter--;
    slideImage();
};

const goNext = () => {
    counter++;
    slideImage();
};

const slideImage = () => {
    if (counter < 0) {
        counter = slides.length - 1;
    } else if (counter >= slides.length) {
        counter = 0;
    }

    sliderContainer.style.transform = `translateX(-${counter * 100}%)`;
};


const startAutoplay = () => {
    interval = setInterval(goNext, 3000); // Change slide every 3 seconds
};

const stopAutoplay = () => {
    clearInterval(interval);
};

startAutoplay();

// Pause autoplay on mouse hover
sliderContainer.addEventListener("mouseover", stopAutoplay);

// Resume autoplay on mouse leave
sliderContainer.addEventListener("mouseout", startAutoplay);
//





// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
// 



function toggleNotification() {
    const message = document.querySelector('.notificationMessage');
    if (message.classList.contains('hidden')) {
      message.classList.remove('hidden');
    } else {
      message.classList.add('hidden');
    }
  }
  function hideNotification() {
    const message = document.querySelector('.notificationMessage');
    message.classList.add('hidden');
  }


// Get the dropdown button and dropdown content
var dropdownBtn = document.querySelector('.dropbtn');
var dropdownContent = document.querySelector('.dropdown-content');

// Function to toggle the dropdown content visibility
dropdownBtn.onclick = function(event) {
    // Toggle the display property of the dropdown content
    if (dropdownContent.style.display === 'block') {
        dropdownContent.style.display = 'none'; // Hide the dropdown content
    } else {
        dropdownContent.style.display = 'block'; // Show the dropdown content
    }
};












