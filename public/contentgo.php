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

    <main class="container mx-auto mt-20 p-10 bg-white shadow-lg rounded-lg">
        <div class="grid md:grid-cols-2 gap-10">
            <div>
                <div class="bg-blue-100 rounded p-4 text-center">
                    <h1 class="text-2xl font-bold text-blue-600">Google</h1>
                    <p class="text-3xl font-bold text-gray-800">Rp28.000<span class="text-lg font-normal">/Content</span></p>
                </div>
                <div class="mt-4 p-2 bg-gray-100 rounded shadow">
                    <h2 class="text-xl font-bold mb-2">Upload Content</h2>
                    <div class="p-4 border rounded bg-white text-center shadow">
                        <p1 class="text-xl font-bold mb-2">Target Pasar Anda</p1>
                        <input type="text" class="w-full border rounded p-2 mt-2" placeholder="Masukkan target pasar anda">
                        <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Google Logo" class="mx-auto mb-4 mt-4" style="width: 100px" >
                        <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300">Custom Content</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-blue-100 rounded p-4 text-center mb-4">
                    <h2 class="text-xl font-bold text-blue-600">Paket Custom Content</h2>
                    <p class="text-gray-700">Kirimkan video anda agar kami yang mengelola</p>
                    <p class="text-sm text-gray-600 mt-2">lebih mudah • target pasar terukur • usaha anda akan booming seketika</p>
                </div>

                <div class="p-8 bg-gray-50 rounded shadow">
                    <h2 class="text-xl font-bold mb-4">Harga</h2>
                    <ul class="text-gray-700">
                        <li class="flex justify-between border-b py-1"><span>Nama Paket</span><span>Custom Content</span></li>
                        <li class="flex justify-between border-b py-1"><span>Harga</span><span>Rp28.000</span></li>
                    </ul>
                </div>
                <div class="mt-4">
                    <h2 class="text-xl font-bold mb-2">Berlangganan sekarang</h2>
                    <div class="flex space-x-4">
                        <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
