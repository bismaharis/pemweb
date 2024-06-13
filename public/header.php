<!-- <?php
      session_start();
      ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AdBoostify</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css">
  <style>
    .bg-image {
      background-image: url('../public/assets/images/1teamwork.jpg');
      background-size: cover;
      background-position: center;
      opacity: 0.65;
    }

    .transition-opacity {
      transition: opacity 0.3s;
    }
  </style>
</head>

<body>

  <header class="bg-white fixed top-0 left-0 w-full shadow z-50 transition-opacity">
    <div class="container mx-auto px-6 py-3 flex justify-between items-center">
      <a href="#" class="text-xl font-bold text-blue-600">AdBoostify</a>
      <div class="flex items-center lg:hidden">
        <button id="hamburger" class="text-slate-600 hover:text-blue-600 focus:outline-none">
          <!-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg> -->
          <i class="ri-menu-3-line"></i>
        </button>
      </div>
      <nav id="nav-menu" class="hidden lg:flex space-x-4 m-auto bg-[#F7F7FD] p-3 pl-12 pr-12 rounded-full">
        <a href="#" class="text-gray-600 hover:text-blue-600">Home</a>
        <a href="#" class="text-gray-600 hover:text-blue-600">About Us</a>
        <a href="#" class="text-gray-600 hover:text-blue-600">Services</a>
        <a href="#" class="text-gray-600 hover:text-blue-600">Contact Us</a>
      </nav>
      <nav class="hidden lg:flex items-center space-x-4">
        <!-- Language Dropdown Start -->
        <div class="relative inline-block text-left dropdown">
          <button type="button" class="inline-flex justify-center w-full px-2 py-2 bg-white text-sm font-normal text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true" onclick="toggleDropdown()">
            ENG
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a 1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
          <div class="dropdown-content origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" id="dropdown-menu">
            <div class="py-1" role="none">
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" onclick="setLanguage('ENG')">ENG</a>
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1" onclick="setLanguage('IND')">IND</a>
            </div>
          </div>
        </div>
        <!-- Language Dropdown End -->
        <!-- Log In Sign In Start -->
        <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700">Sign In</a>
        <a href="#" class="px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white">Log In</a>
        <!-- Log In Sign In End -->
      </nav>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden">
      <nav class="bg-white px-2 pt-2 pb-4 space-y-1">
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">Home</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">About Us</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">Services</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-blue-600">Contact Us</a>
        <!-- Language Dropdown Start -->
        <div class="relative text-left mt-4">
          <button type="button" class="inline-flex justify-center w-full px-4 py-2 bg-white text-sm font-normal text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="mobile-lang-menu-button" aria-expanded="true" aria-haspopup="true" onclick="toggleMobileDropdown()">
            ENG
            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a 1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
          <div class="dropdown-content origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="mobile-lang-menu-button" id="mobile-dropdown-menu">
            <div class="py-1" role="none">
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="mobile-menu-item-0" onclick="setLanguage('ENG')">ENG</a>
              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="mobile-menu-item-1" onclick="setLanguage('IND')">IND</a>
            </div>
          </div>
        </div>
        <!-- Language Dropdown End -->
        <!-- Log In Sign In Start -->
        <div class="mt-4">
          <?php if (isset($_SESSION["is_login"]) && $_SESSION["is_login"]) { ?>
            <div class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700">Hallo, <?= htmlspecialchars($_SESSION["username"]); ?></div>
          <?php } else { ?>
            <a href="#" class="block px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700 mb-2">Sign In</a>
            <a href="#" class="block px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white">Log In</a>
          <?php } ?>
        </div>
        <!-- Log In Sign In End -->
      </nav>
    </div>
  </header>

  <script>
    document.getElementById('hamburger').addEventListener('click', function() {
      var menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });

    function toggleDropdown() {
      document.getElementById('dropdown-menu').classList.toggle('hidden');
    }

    function toggleMobileDropdown() {
      document.getElementById('mobile-dropdown-menu').classList.toggle('hidden');
    }

    function setLanguage(lang) {
      console.log('Language set to: ' + lang);
      // Implement language switching logic here
    }
  </script>

</body>

</html>