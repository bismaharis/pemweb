<?php
    session_start();
?>
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
<body>
 <header class="bg-white fixed top-0 left-0 w-full shadow z-50 transition-opacity">
      <div class="container mx-auto px-6 py-3 flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-blue-600">AdBoostify</a>
        <nav class="space-x-4 m-auto bg-[#F7F7FD] p-3 pl-12 pr-12 rounded-full">
          <a href="index.php" class="text-gray-600 hover:text-blue-600">Home</a>
          <a href="About.php" class="text-gray-600 hover:text-blue-600">About Us</a>
          <a href="Services.php" class="text-gray-600 hover:text-blue-600">Services</a>
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
          <?php if (isset($_SESSION["is_login"]) && $_SESSION["is_login"]) { ?>
    <div class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700 ml-4">Hallo, <?= htmlspecialchars($_SESSION["username"]); ?></div>
<?php } else { ?>
    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700">Sign In</a>
    <a href="#" class="px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white">Log In</a>
<?php } ?>

            <!-- <a
              href="#"
              class="px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white ml-1"
              >Log In</a
            > -->
          <!-- <div
              class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700 ml-4"
              >Hallo, 
              ?></div> -->
            <!-- <a
              href="#"
              class="px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white ml-1"
              >Log In</a
            > -->
          <!-- Log In Sign In End -->
        </nav>
      </div>
    </header>
</body>
</html>