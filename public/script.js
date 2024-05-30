// script.js

function toggleDropdown() {
  document.getElementById('dropdown-menu').classList.toggle('hidden');
}

function setLanguage(lang) {
  document.getElementById('menu-button').textContent = lang;
  toggleDropdown();
  // Implement language switching logic here
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#menu-button')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (!openDropdown.classList.contains('hidden')) {
        openDropdown.classList.add('hidden');
      }
    }
  }
}

window.onscroll = function() {
  var header = document.querySelector('header');
  if (window.scrollY > 0) {
    header.classList.add('opacity-75');
  } else {
    header.classList.remove('opacity-75');
  }
};

var swiper = new Swiper('.swiper-container', {
  loop: true,
  autoplay: {
      delay: 5000,
  },
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
});

document.querySelectorAll('.swiper-slide').forEach(slide => {
  slide.addEventListener('click', () => {
    slide.classList.toggle('active');
    if (slide.classList.contains('active')) {
      slide.style.transform = 'scale(1.1)';
    } else {
      slide.style.transform = 'scale(1)';
    }
  });
});

document.getElementById('subscribe-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const emailAddress = document.getElementById('email-address').value;
  console.log('Subscribed with email:', emailAddress);
});