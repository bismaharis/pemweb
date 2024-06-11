<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services Section</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
    <style>
      .testimonial-card {
        height: 400px;
        width: 300px; 
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s;
      }

      .transisi{
        transition: transform 0.3s;
      }

      .testimonial-card:hover {
      transform: scale(1.05);
      }

      .dropdown-content { display: none; }
      .dropdown:hover .dropdown-content { display: block; }
    </style>
  </head>
  <body>
    <!-- Header Star -->
    <header class="bg-white fixed top-0 left-0 w-full shadow z-50 transition-opacity">
      <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-blue-600">AdBoostify</a>
        <div class="flex items-center lg:hidden">
          <button id="hamburger" class="text-slate-600 hover:text-blue-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
        <nav id="nav-menu" class="hidden lg:flex space-x-4 m-auto bg-[#F7F7FD] p-3 pl-12 pr-12 rounded-full">
          <a href="index.php" class="text-gray-600 hover:text-blue-600">Home</a>
          <a href="About.php" class="text-gray-600 hover:text-blue-600">About Us</a>
          <a href="Services.php" class="text-gray-600 hover:text-blue-600">Services</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">Contact Us</a>
        </nav>
        <nav class="flex items-center space-x-4">
          <!-- Language Dropdown Start -->
          <div class="relative inline-block text-left dropdown">
            <div>
              <button type="button" class="inline-flex justify-center w-full px-2 py-2 bg-white text-sm font-normal text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true" onclick="toggleDropdown()">
                ENG
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a 1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div class="dropdown-content origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" id="dropdown-menu">
              <div class="py-1" role="none">
                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0" onclick="setLanguage('ENG')">ENG</a>
                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1" onclick="setLanguage('IND')">IND</a>
              </div>
            </div>
          </div>
          <!-- Language Dropdown End -->
          <!-- Log In Sign In Start -->
          <!-- <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700">Sign In</a>
          <a href="#" class="px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white">Log In</a> -->
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
        </nav>
      </div>
    </header>
    <!-- Header End -->

    <!-- Main Content Start -->
    <main class="pt-20 container mx-auto px-6">
      <section class="text-center mt-36 mb-36 max-w-2xl justify-center mx-auto">
        <div class="flex">
          <img src="../public/assets/images/shape.jpg" alt="shape" class="w-20 h-20">
          <h1 class="text-3xl font-semibold mb-8 max-w-lg">Helping You Grow Your Business: Our Comprehensive Advertising Services.</h1>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
          <button onclick="location.href='custom-content.html'" class="bg-white p-6 rounded-lg custom-shadow hover:bg-gray-50 transition">
            <div class="flex flex-col items-left">
              <div class="mb-2">
                <img src="../public/assets/images/brush.jpg" alt="custom-content">
              </div>
              <a href="customcontent.php">
              <div class="text-left max-w-md">
                <h2 class="text-xl font-semibold">Custom Content Selection</h2>
                <p class="text-gray-500">We can support your company to select the best content</p>
              </div>
              </a>
            </div>
          </button>
  
          <button onclick="location.href='media-social.html'" class="bg-white p-6 rounded-lg custom-shadow hover:bg-gray-50 transition">
            <div class="flex flex-col items-left">
              <div class="mb-2">
                <img src="../public/assets/images/sosialMedia.jpg" alt="sosialMedia">
              </div>
              <div href="#" class="text-left max-w-md">
                <h2 class="text-xl font-semibold">Media Social Advertising</h2>
                <p class="text-gray-500">Help you to find best media social and platform to put your ads</p>
              </div>
            </div>
          </button>
        </div>
      </section>
    </main>
    <!-- Main Content End -->

    <!-- Fitur Section Start -->
    <section class="container mx-auto px-6 max-w-6xl mb-8">
      <section class="text-center my-10 pt-20">
        <h2 class="text-3xl font-bold text-gray-800">We have multidisciplinary teams to meet any <span class="text-blue-600">challenge</span>.</h2>
      </section>
      <section class="flex justify-center bg-white shadow-lg rounded-lg p-8">
        <!-- Youtube Ads -->
        <button onclick="location.href='custom-content.html'" class="bg-white p-6 rounded-lg  hover:bg-gray-50 transition">
          <div class="flex flex-col items-left">
            <div class="mb-2">
              <img src="../public/assets/images/Youtube.jpg" alt="custom-content">
            </div>
            <div class="text-left max-w-md">
              <h2 class="text-xl font-semibold">Youtube Ads</h2>
              <p class="text-gray-500">Our team understands the marketplace and YouTube ads algorithm.</p>
            </div>
          </div>
        </button>
        <!-- Google Ads -->
        <button onclick="location.href='custom-content.html'" class="bg-white p-6 rounded-lg  hover:bg-gray-50 transition">
          <div class="flex flex-col items-left">
            <div class="mb-2">
              <img src="../public/assets/images/Google.jpg" alt="custom-content">
            </div>
            <div class="text-left max-w-md">
              <h2 class="text-xl font-semibold">Google Ads</h2>
              <p class="text-gray-500">Our team understands the marketplace and Google ads algorithm.</p>
            </div>
          </div>
        </button>
        <!-- Facebook Ads -->
        <button onclick="location.href='custom-content.html'" class="bg-white p-6 rounded-lg  hover:bg-gray-50 transition">
          <div class="flex flex-col items-left">
            <div class="mb-2">
              <img src="../public/assets/images/Facebook.jpg" alt="custom-content">
            </div>
            <div class="text-left max-w-md">
              <h2 class="text-xl font-semibold">Facebook Ads</h2>
              <p class="text-gray-500">Our team understands the marketplace and Facebook ads algorithm.</p>
            </div>
          </div>
        </button>
      </section>
    </section>
    <!-- Fitur Section End -->

    <!-- Footer Start -->
    <footer class="mt-auto py-8 bg-gray-100">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-between">
          <!-- Product Section -->
          <div class="w-full sm:w-1/2 md:w-1/4 mb-4 md:mb-0">
            <h5 class="text-lg font-semibold mb-2">Product</h5>
            <ul>
              <li><a href="#employee-database" class="text-gray-600 hover:text-gray-900">Employee database</a></li>
              <li><a href="#payroll" class="text-gray-600 hover:text-gray-900">Payroll</a></li>
              <li><a href="#absences" class="text-gray-600 hover:text-gray-900">Absences</a></li>
              <li><a href="#time-tracking" class="text-gray-600 hover:text-gray-900">Time tracking</a></li>
              <li><a href="#shift-planner" class="text-gray-600 hover:text-gray-900">Shift planner</a></li>
              <li><a href="#recruiting" class="text-gray-600 hover:text-gray-900">Recruiting</a></li>
            </ul>
          </div>
          <!-- Information Section -->
          <div class="w-full sm:w-1/2 md:w-1/4 mb-4 md:mb-0">
            <h5 class="text-lg font-semibold mb-2">Information</h5>
            <ul>
              <li><a href="#faq" class="text-gray-600 hover:text-gray-900">FAQ</a></li>
              <li><a href="#blog" class="text-gray-600 hover:text-gray-900">Blog</a></li>
              <li><a href="#support" class="text-gray-600 hover:text-gray-900">Support</a></li>
            </ul>
          </div>
          <!-- Company Section -->
          <div class="w-full sm:w-1/2 md:w-1/4 mb-4 md:mb-0">
            <h5 class="text-lg font-semibold mb-2">Company</h5>
            <ul>
              <li><a href="#about-us" class="text-gray-600 hover:text-gray-900">About us</a></li>
              <li><a href="#careers" class="text-gray-600 hover:text-gray-900">Careers</a></li>
              <li><a href="#contact-us" class="text-gray-600 hover:text-gray-900">Contact us</a></li>
              <li><a href="#lift-media" class="text-gray-600 hover:text-gray-900">Lift Media</a></li>
            </ul>
          </div>
          <!-- Subscribe Section -->
          <div class="w-full sm:w-1/2 md:w-1/4 p-4 sm:p-8 bg-gray-200 rounded-xl mb-4 md:mb-0">
            <h5 class="text-lg font-semibold mb-4">Subscribe</h5>
            <form id="subscribe-form" class="flex items-center rounded-full">
              <input type="email" id="email-address" class="form-input w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none" placeholder="Email address" />
              <button type="submit" class="bg-blue-500 -z-1 -ml-10 text-white px-4 py-2 rounded-full hover:bg-blue-700">➔</button>
            </form>
            <p class="text-gray-600 mt-2">
              Hello, we are Lift Media. Our goal is to translate the positive
              effects from revolutionizing how companies engage with their
              clients & their team.
            </p>
          </div>
        </div>
        <hr class="mt-8" />
        <div class="flex flex-wrap justify-between mt-4">
          <div class="w-full sm:w-auto text-center sm:text-left mb-4 sm:mb-0">
            <a href="#" class="text-xl font-bold text-blue-600">AdBoostify</a>
          </div>
          <div class="w-full sm:w-auto text-center sm:text-left mb-4 sm:mb-0">
            <a href="#terms" class="mr-4 hover:text-gray-900">Terms</a>
            <a href="#privacy" class="mr-4 hover:text-gray-900">Privacy</a>
            <a href="#cookies" class="hover:text-gray-900">Cookies</a>
          </div>
          <div class="w-full sm:w-auto text-center sm:text-left flex justify-center sm:justify-start space-x-4">
            <a href="#linkedin" class="text-gray-600 hover:text-gray-900">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.23 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.21 0 22.23 0zM7.06 20.45H3.55V9H7.06v11.45zM5.3 7.52c-1.11 0-2-.89-2-2 0-1.1.89-2 2-2s2 .89 2 2c0 1.1-.89 2-2 2zm15.15 12.93h-3.51V14.8c0-1.34-.02-3.06-1.86-3.06-1.86 0-2.14 1.45-2.14 2.95v5.75h-3.51V9h3.37v1.57h.05c.47-.89 1.62-1.82 3.33-1.82 3.56 0 4.22 2.34 4.22 5.38v6.32z" />
              </svg>
            </a>
            <a href="#facebook" class="text-gray-600 hover:text-gray-900">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.407.593 24 1.324 24h11.478V14.709h-3.127v-3.596h3.127V8.411c0-3.1 1.893-4.785 4.657-4.785 1.325 0 2.463.099 2.795.142v3.242l-1.917.001c-1.502 0-1.793.714-1.793 1.761v2.309h3.587l-.467 3.596h-3.12V24h6.116C23.407 24 24 23.407 24 22.676V1.324C24 .593 23.407 0 22.676 0z" />
              </svg>
            </a>
            <a href="#twitter" class="text-gray-600 hover:text-gray-900">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.954 4.569c-.885.392-1.83.656-2.825.775a4.916 4.916 0 0 0 2.163-2.724 9.86 9.86 0 0 1-3.127 1.196 4.916 4.916 0 0 0-8.384 4.482A13.948 13.948 0 0 1 1.671 3.149a4.922 4.922 0 0 0 1.523 6.573 4.902 4.902 0 0 1-2.228-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.902 4.902 0 0 1-2.224.085 4.924 4.924 0 0 0 4.604 3.417A9.868 9.868 0 0 1 0 19.54 13.906 13.906 0 0 0 7.548 21c9.058 0 14.01-7.502 14.01-14.01 0-.213-.005-.426-.014-.637a10.025 10.025 0 0 0 2.46-2.553z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer> 
    <!-- Footer End -->

    <script src="script.js">
    </script>
  </body>
</html>