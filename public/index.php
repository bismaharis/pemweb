<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdBoostify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
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
    <body class="bg-white text-gray-800"></body>
    
    <!-- Header Start -->
    <header class="bg-white fixed top-0 left-0 w-full shadow z-50 transition-opacity">
      <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-blue-600">AdBoostify</a>
        <nav class="space-x-4 m-auto bg-[#F7F7FD] p-3 pl-12 pr-12 rounded-full">
          <a href="#" class="text-gray-600 hover:text-blue-600">Home</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">About Us</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">Services</a>
          <a href="#" class="text-gray-600 hover:text-blue-600">Contact Us</a>
        </nav>
        <nav class="flex items-center">

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
          <!-- Language Droptdown End -->

          <!-- Log In Sign In Start -->
          <a
              href="#"
              class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700 ml-4"
              >Sign In</a
            >
            <a
              href="#"
              class="px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white ml-1"
              >Log In</a
            >
          <!-- Log In Sign In End -->
        </nav>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start-->
    <section class="relative flex items-center justify-between p-8 bg-white shadow-lg rounded-lg max-w-full mx-auto my-16 h-screen">
      <div class="absolute inset-0 bg-image rounded-r-lg"></div>
      <div class="relative z-10 md:w-1/2 mb-8 ml-12 md:mb-0 bg-white bg-opacity-75 p-16 rounded-lg">
        <p class="text-[#F3BC4C] font-semibold">ADS SERVICE</p>
        <h1 class="text-5xl md:text-5xl font-bold text-gray-800 mb-4">AdBoostify: Create, Develop, Improve</h1>
        <p class="text-gray-600 mb-6">Opening up possibilities, developing business</p>
        <button class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">See projects</button>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Main Content Start -->
    <main class="pt-20 container mx-auto px-6">
      <section class="text-center my-10">
        <h2 class="text-3xl font-bold text-gray-800">We have multidisciplinary teams to meet any <span class="text-blue-600">challenge</span>.</h2>
      </section>
      <section class="flex justify-around bg-white shadow-lg rounded-lg p-8">
        <!-- Youtube Ads -->
        <div class="flex flex-col items-center space-y-4">
          <div class="text-blue-500">
            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.498 6.186a2.91 2.91 0 00-2.043-2.054C19.7 3.555 12 3.555 12 3.555s-7.7 0-9.455.577A2.91 2.91 0 00.502 6.186 30.188 30.188 0 000 12c0 2.057.226 4.083.502 5.814a2.91 2.91 0 002.043 2.054C4.3 20.445 12 20.445 12 20.445s7.7 0 9.455-.577a2.91 2.91 0 002.043-2.054A30.188 30.188 0 0024 12c0-2.057-.226-4.083-.502-5.814zM9.546 15.568V8.432l6.364 3.568-6.364 3.568z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-800">Youtube Ads</h3>
            <p class="text-gray-600 text-center">Our team understands the marketplace and YouTube ads algorithm.</p>
        </div>
          <!-- Google Ads -->
          <div class="flex flex-col items-center space-y-4">
            <div class="text-blue-500">
              <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.16 10.91c.14 1.25.14 2.51 0 3.76-.15 1.29-.45 2.55-.88 3.75a10.16 10.16 0 01-2.25 3.44c-.94.94-2.08 1.7-3.33 2.25-1.2.43-2.46.73-3.75.88-1.25.14-2.51.14-3.76 0-1.29-.15-2.55-.45-3.75-.88a10.16 10.16 0 01-3.44-2.25c-.94-.94-1.7-2.08-2.25-3.33-.43-1.2-.73-2.46-.88-3.75-.14-1.25-.14-2.51 0-3.76.15-1.29.45-2.55.88-3.75.55-1.25 1.31-2.39 2.25-3.33a10.16 10.16 0 013.44-2.25c1.2-.43 2.46-.73 3.75-.88 1.25-.14 2.51-.14 3.76 0 1.29.15 2.55.45 3.75.88a10.16 10.16 0 013.44 2.25c.94.94 1.7 2.08 2.25 3.33.43 1.2.73 2.46.88 3.75zM10.68 9.88l3.44-3.44a7.67 7.67 0 012.97-1.76c.88-.24 1.79-.35 2.7-.34.91.01 1.82.12 2.7.34a7.67 7.67 0 012.97 1.76l.01.01c.87.87 1.55 1.91 2.03 3.04a8.96 8.96 0 010 7.84c-.48 1.13-1.16 2.17-2.03 3.04a7.67 7.67 0 01-2.97 1.76c-.88.24-1.79.35-2.7.34-.91-.01-1.82-.12-2.7-.34a7.67 7.67 0 01-2.97-1.76l-3.44-3.44c-.87-.87-1.55-1.91-2.03-3.04a8.96 8.96 0 010-7.84c.48-1.13 1.16-2.17 2.03-3.04z"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-800">Google Ads</h3>
            <p class="text-gray-600 text-center">Our team understands the marketplace and Google ads algorithm.</p>
          </div>
          <!-- Facebook Ads -->
          <div class="flex flex-col items-center space-y-4">
            <div class="text-blue-500">
              <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.676 0H1.323C.593 0 0 .593 0 1.324V22.68C0 23.407.593 24 1.323 24H12.82v-9.289H9.692V10.5h3.127V8.254c0-3.1 1.892-4.792 4.658-4.792 1.325 0 2.464.099 2.795.144v3.24H17.81c-1.398 0-1.669.667-1.669 1.64V10.5h3.338l-.434 3.211h-2.904V24h5.696c.732 0 1.325-.593 1.325-1.324V1.324C24 .593 23.407 0 22.676 0"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-800">Facebook Ads</h3>
            <p class="text-gray-600 text-center">Our team understands the marketplace and Facebook ads algorithm.</p>
          </div>
      </section>
    </main>
    <!-- Main Content End -->

    <script src="../public/script.js"></script>
  </body>
</html>
