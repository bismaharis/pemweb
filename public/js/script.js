HEAD
const swiper = new Swiper('.swiper', {
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

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

const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

function toggleDropdown() {
  document.getElementById('dropdown-menu').classList.toggle('hidden');
}

function setLanguage(language) {
  // Change the language
  document.getElementById('menu-button').innerText = language;
  toggleDropdown();


const swiper = new Swiper('.swiper', {
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

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

const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

function toggleDropdown() {
  document.getElementById('dropdown-menu').classList.toggle('hidden');
}

function setLanguage(language) {
  // Change the language
  document.getElementById('menu-button').innerText = language;
  toggleDropdown();
c94b4372875bb9ec8b7a77e80dcd590698fb046d
}
}


// PaySistem
const prices = {
  target_marketing: {
      anak: 50000,
      remaja: 70000,
      dewasa: 100000,
      lansia: 80000,
      lainya: 60000
  },
  product_type: {
      makanan: 30000,
      fashion: 40000,
      mable: 50000,
      lainya: 20000
  },
  ad_type: {
      poster: 100000,
      vidio_pendek: 200000,
      vidio_panjang: 300000
  }
};

function updatePrice() {
  const targetMarketing = document.getElementById('target_marketing').value;
  const productType = document.getElementById('product_type').value;
  const adType = document.getElementById('ad_type').value;

  const totalPrice = prices.target_marketing[targetMarketing] + prices.product_type[productType] + prices.ad_type[adType];

  document.getElementById('total_price').innerText = `Rp ${totalPrice.toLocaleString()}`;
}
