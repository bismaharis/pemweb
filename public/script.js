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
