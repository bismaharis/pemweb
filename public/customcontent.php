<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdBoostify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
      .option:hover {
        cursor: pointer;
        background-color: #f0f0f0;
      }
      .selected {
        border: 2px solid #0000ff;
      }
      .cta {
        background-color: #007BFF;
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin: 20px 0;
        font-size: 1.25rem;
      }
    </style>
  </head>
  <body class="bg-slate-100">
    
    <!-- Header Start -->
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
          <a href="#" class="text-gray-600 hover:text-blue-600">Home</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">About Us</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">Services</a>
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
          <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700">Sign In</a>
          <a href="#" class="px-4 py-2 bg-white ring-2 ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white">Log In</a>
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

     <!-- Top Content Start -->
     <section class="bg-white mb-2 mt-4 w-full">
        <h1 class="text-3xl font-bold text-center mb-12">Custom Content Selection</h1>
        <h3 class="text-xl font-semibold text-left ml-2 mb-5">Top Content Reference</h3>
        <div class="flex justify-left mb-8">
            <button id="video-btn" class="mx-2 py-2 px-10 border-blue-500 bg-blue-500 text-white rounded-full">Video</button>
            <button id="photo-btn" class="mx-2 py-2 px-10 border-blue-500 bg-blue-500 text-white rounded-full">Photo</button>
        </div>
        <div id="video-content" class="grid grid-rows-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Video Content Cards -->
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">ERIGO</h5>
                <p class="text-gray-800 font-medium">Brand New Jacket From Erigo Collab With Avengers 2024</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">ANIMALOVERS</h5>
                <p class="text-gray-800 font-medium">How You Can Save Your Lovely Animal</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">ASUS</h5>
                <p class="text-gray-800 font-medium">The Best Gaming Laptop in 2024</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">HANDSOME BEE</h5>
                <p class="text-gray-800 font-medium">The Best Translator in Indonesia</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">BLACK SQUID RICE</h5>
                <p class="text-gray-800 font-medium">Black Squid Rice Mr.Kris</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">ARSI GROUP</h5>
                <p class="text-gray-800 font-medium">Make Your Dream House Come True</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">INOVA</h5>
                <p class="text-gray-800 font-medium">Safe, Comfortable Car Low Wage Salary</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Product Image" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">GOGREEN</h5>
                <p class="text-gray-800 font-medium">Love Plant Like you Love Your Ex</p>
              </div>
            </div>
        </div>
        <div id="photo-content" class="grid grid-rows-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 hidden">
            <!-- Photo Content Cards -->
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">SUNSET</h5>
                <p class="text-gray-800 font-medium">Beautiful Sunset at Beach</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">MOUNTAIN</h5>
                <p class="text-gray-800 font-medium">Majestic Mountain Landscape</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">FOREST</h5>
                <p class="text-gray-800 font-medium">Dense Forest in Autumn</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">CITYSCAPE</h5>
                <p class="text-gray-800 font-medium">Cityscape at Night</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">OCEAN</h5>
                <p class="text-gray-800 font-medium">Calm Ocean Waves</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">DESERT</h5>
                <p class="text-gray-800 font-medium">Desert Dunes at Sunset</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">LAKE</h5>
                <p class="text-gray-800 font-medium">Serene Lake Reflection</p>
              </div>
            </div>
  
            <div class="bg-white py-2 px-2 rounded-lg max-h-fit shadow-lg flex items-center space-x-4 max-w-md">
              <img src="https://via.placeholder.com/64" alt="Photo" class="w-16 h-16 rounded-lg object-cover">
              <div>
                <h5 class="text-blue-500 font-semibold text-sm">VALLEY</h5>
                <p class="text-gray-800 font-medium">Green Valley in Spring</p>
              </div>
            </div>
        </div>
      </section>
      <!-- Top Content End -->

        <!-- Call to Action Start -->
        <section class="bg-blue-100 text-center text-2xl font-bold py-4 rounded-lg shadow-md">
            Interested in ads like the ones above? Join us to get them.
        </section>
        <!-- Call to Action End -->
  
  
    <!-- Call to Action End -->

    <!-- Pricing Section Start -->
    <section class="bg-gray-100 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 ">Custom Content Selection</h2>
        <div class="grid grid-cols-2 gap-4">
        <a href="contentyt.php">
            <div class="option bg-white p-6 rounded-lg shadow transition ease-in-out duration-150 hover:shadow-lg hover:bg-gray-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50" onkeypress="selectOption(this)">
                <div class="flex flex-col items-left">
                    <div class="ri-youtube-line mb-2 text-7xl text-left text-sky-600"></div>
                    <div class="text-left max-w-md">
                        <h2 class="text-xl font-semibold center">Youtube Ads</h2>
                    </div>
                </div>
              </div>
            </a>

            <a href="contentgo.php">
            <div class="option bg-white p-6 rounded-lg shadow transition ease-in-out duration-150 hover:shadow-lg hover:bg-gray-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50" onkeypress="selectOption(this)">
                <div class="flex flex-col items-left">
                    <div class="ri-google-line mb-2 text-7xl text-left text-sky-600"></div>
                    <div class="text-left max-w-md">
                        <h2 class="text-xl font-semibold center">Google Ads</h2>
                    </div>
                </div>
            </div>
            </a>
        </div>
        
    </section>
    
    <!-- Pricing Section End -->

    <script>
      function selectOption(element) {
        // Remove 'selected' class from all options
        const options = document.querySelectorAll('.option');
        options.forEach(option => {
          option.classList.remove('selected');
        });
        
        // Add 'selected' class to the clicked option
        element.classList.add('selected');
      }

      document.getElementById('hamburger').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
      });

      function toggleDropdown() {
        document.getElementById('dropdown-menu').classList.toggle('hidden');
      }

      function setLanguage(lang) {
        // Function to set the language
      }

      document.getElementById('video-btn').addEventListener('click', function () {
        document.getElementById('video-content').classList.remove('hidden');
        document.getElementById('photo-content').classList.add('hidden');
      });

      document.getElementById('photo-btn').addEventListener('click', function () {
        document.getElementById('video-content').classList.add('hidden');
        document.getElementById('photo-content').classList.remove('hidden');
      });
    </script>
  </body>
</html>
