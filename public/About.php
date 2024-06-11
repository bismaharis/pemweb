<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
    <style>
      .testimonial-card {
        height: 400px;
        width: 300px; /* Fixed height for the cards */
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
    </style>
  </head>
  <body>
    <!-- Header Star -->
    <header
      class="bg-white fixed top-0 left-0 w-full shadow z-50 transition-opacity">
      <div
        class="container mx-auto px-6 py-3 flex justify-between items-center">
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
              <button
                type="button"
                class="inline-flex justify-center w-full px-2 py-2 bg-white text-sm font-normal text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                id="menu-button"
                aria-expanded="true"
                aria-haspopup="true"
                onclick="toggleDropdown()">
                ENG
                <svg
                  class="-mr-1 ml-2 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true">
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a 1 1 0 01-1.414 0l-4-4a 1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div
              class="dropdown-content origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
              role="menu"
              aria-orientation="vertical"
              aria-labelledby="menu-button"
              id="dropdown-menu">
              <div class="py-1" role="none">
                <a
                  href="#"
                  class="text-gray-700 block px-4 py-2 text-sm"
                  role="menuitem"
                  tabindex="-1"
                  id="menu-item-0"
                  onclick="setLanguage('ENG')"
                  >ENG</a
                >
                <a
                  href="#"
                  class="text-gray-700 block px-4 py-2 text-sm"
                  role="menuitem"
                  tabindex="-1"
                  id="menu-item-1"
                  onclick="setLanguage('IND')"
                  >IND</a
                >
              </div>
            </div>
          </div>
          <!-- Language Droptdown End -->

          <!-- Log In Sign In Start -->
          <!-- <h3 class="text-sky-600 text-base font-bold -mt-1">Hy, Bisma</h3> -->
          <!-- Log In Sign In End -->
        </nav>
      </div>
    </header>
    <!-- Header End -->

    <!-- About Start -->
    <section id="about-us" class="bg-white py-16 mt-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <img
          src="assets/images/shape.jpg"
          alt="icon"
          width="50px"
          height="60px"
          class="absolute -ml-12" />
        <div
          class="absolute -ml-8 w-1 h-full mt-16 bg-gradient-to-b from-blue-500 to-green-500"></div>
        <div class="text-left mb-12 ml-8">
          <h2 class="text-xl font-bold text-yellow-500">About Us</h2>
          <p
            class="mt-4 text-3xl max-w-2xl leading-8 font-semibold text-slate-700">
            For more than a year, we've collaborated with industry pioneers to
            swiftly expand their teams and address their business obstacles.
          </p>
        </div>

        <div
          class="flex flex-col md:flex-row items-center md:items-start mb-12">
          <div class="md:w-1/2 ml-8">
            <p class="text-lg font-semibold text-slate-700 mt-28 max-w-xl">
              At Abudsoftly, we are driven by the belief that technology can
              transform businesses and elevate their potential. Founded in 2024,
              we have been on a mission to empower organizations with innovative
              solutions that drive growth, efficiency, and success.
            </p>
          </div>
          <div class="md:w-1/2 md:pl-10">
            <img
              src="assets/images/image-1.jpg"
              alt="Team working together"
              class="-mt-20 ml-8" />
          </div>
        </div>

        <div></div>
        <img
          src="assets/images/shape-2.jpg"
          alt="icon"
          width="50px"
          height="60px"
          class="absolute -ml-12 mt-2" />
        <div
          class="absolute -ml-8 w-1 h-full mt-16 bg-gradient-to-b from-green-500 to-blue-500"></div>
        <div
          class="flex flex-col md:flex-row items-center md:items-start mb-12">
          <div class="md:w-1/2 md:order-2 md:pl-10 text-right mt-8">
            <div class="text-right mb-4 ml-12">
              <h2 class="text-xl font-bold text-yellow-500">Our Story</h2>
            </div>
            <p class="text-lg font-semibold text-slate-700 mt-2 max-w-xl">
              Our journey began when a group of passionate technologists saw the
              untapped potential of digital technology to revolutionize
              industries. With a shared vision, we embarked on a mission to
              bridge the gap between cutting-edge technology and businesses
              seeking to harness its power. Over a year, we have evolved into a
              team of experts who thrive on challenges, creativity, and
              collaboration.
            </p>
          </div>
          <div class="md:w-1/2 md:order-1 ml-8">
            <img src="assets/images/image-2.jpg" alt="Team collaboration" />
          </div>
        </div>

        <div class="absolute -ml-8 w-1 h-full bg-gradient-to-b from-blue-500 to-green-500"></div>

        <div class="flex ml-12">
          <div class="text-left mb-12 font-semibold max-w-lg">
            <p class="text-4xl text-slate-700">Since then...</p>
            <br />
            <p class="text-4xl text-slate-700">
              We've completed more than
              <span class="font-bold">900 projects</span> for over
              <span class="font-bold">500 distinct enterprises.</span>
            </p>
          </div>
          <div class="md:w-1/2 md:order-1 -ml-2 mt-20">
            <img src="assets/images/medal-star.jpg" alt="medal star" />
          </div>
        </div>
        <div
          class="absolute -ml-10 -mt-36 w-5 h-5 rounded-full bg-blue-500"></div>

        <div class="absolute mt-44 -ml-8 w-1 h-full bg-gradient-to-b from-green-500 to-blue-500"></div>

        <div class="relative text-center mt-36 mb-52">
          <div class="absolute mt-2 -ml-10 w-5 h-5 rounded-full bg-green-500"></div>
          <h2 class="font-semibold text-left ml-12 text-2xl mb-36">
            For a year our Front-End developers, Front-End developers, and Data Scientist work on hundreds of exciting projects...</h2>
          <div class="flex justify-center space-x-8 mb-8">
            
            <!-- Front-End Developer -->
            <div class="flex flex-col items-center">
              <div
                class="w-40 h-40 rounded-full flex items-center justify-center mb-4">
                <img
                  src="assets/images/bisma.jpg"
                  alt="Front-End Developer"
                  class="w-40 h-40 rounded-full object-cover" />
              </div>
              <p class="font-semibold text-slate-600 max-w-20">Front-End Developer</p>
            </div>
            <!-- Back-End Developer -->
            <div class="flex flex-col items-center">
              <div
                class="w-40 h-40 rounded-full  flex items-center justify-center mb-4">
                <img
                  src="assets/images/agil.jpg"
                  alt="Back-End Developer"
                  class="w-40 h-40 rounded-full object-cover" />
              </div>
              <p class="font-semibold text-slate-600 max-w-20">Back-End Developer</p>
            </div>
            <!-- Data Scientist -->
            <div class="flex flex-col items-center">
              <div
                class="w-40 h-40 rounded-full flex items-center justify-center mb-4">
                <img
                  src="assets/images/fadil.jpg"
                  alt="Data Scientist"
                  class="w-40 h-40 rounded-full object-center" />
              </div>
              <p class="font-semibold text-slate-600 max-w-20">Data Scientist</p>
            </div>
          </div>
          
        </div>
        
        <!-- komen start -->
        <div class="absolute -ml-8 w-1 h-5/6 bg-gradient-to-b from-blue-500 to-green-500"></div>
        <div class="absolute -mt-2 -ml-10 w-5 h-5 rounded-full bg-blue-500"></div>
        <div class="-mt-2">
          <h3 class="font-semibold text-left ml-12 text-2xl mb-20">...who say many kind words that make us proud.</h3>
        </div>
        <div
          class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-36">
          <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg mx-2 mr-4">
            <div class="flex items-center mb-2">
                <div class="flex-shrink-0">
                    <img src="assets/images/logo-3.jpg" alt="Fadil Clark" class="w-12 h-12 rounded-full">
                </div>
                <div class="ml-4">
                    <p class="text-xl font-semibold">Fadil Clark</p>
                    <p class="text-sm text-gray-500">CMO of BCare Apps</p>
                </div>
            </div>
            <hr class="m-3">
            <div class="text-left">
              <p class="text-gray-600 mb-3 font-semibold">"Sculpted User Experiences Beyond Imagination!"</p>
              <p class="text-gray-500">"The content crafted by AdBoostify turned our app into a masterpiece. The attention to detail, intuitive design and user-centric approach have resulted in rave reviews from our customers. Their content expertise has taken our brand to a whole new level."</p>
            </div>
          </div>

          <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg mx-2 mr-4">
            <div class="flex items-center mb-2">
                <div class="flex-shrink-0">
                    <img src="assets/images/logo-2.jpg" alt="Mark Rizal" class="w-12 h-12 rounded-full">
                </div>
                <div class="ml-4">
                    <p class="text-xl font-semibold">Mark Rizal</p>
                    <p class="text-sm text-gray-500">COO of AyoLari</p>
                </div>
            </div>
            <hr class="m-3">
            <div class="text-left">
              <p class="text-gray-600 mb-3 font-semibold">"Transformed Our Business with Innovative Tech!"</p>
              <p class="text-gray-500">"We owe a significant part of our success to AdBoostify. Their custom ads content solution streamlined our processes, saving us time and resources. Their team's dedication to innovation and problem-solving is unmatched. We're grateful for their partnership."</p>
            </div>
          </div>

          <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg mr-4">
            <div class="flex items-center mb-2">
                <div class="flex-shrink-0">
                    <img src="assets/images/logo-1.jpg" alt="Mary Agil" class="w-12 h-12 rounded-full">
                </div>
                <div class="ml-4">
                    <p class="text-xl font-semibold">Mary Agil</p>
                    <p class="text-sm text-gray-500">CEO of NoMoreZits</p>
                </div>
            </div>
            <hr class="m-3">
            <div class="text-left">
              <p class="text-gray-600 mb-3 font-semibold">"Exceptional Solutions, Exceeded Expectations!"</p>
              <p class="text-gray-500">"Working with AdBoostify has been an absolute pleasure. Their team took the time to understand our unique needs and delivered a solution that not only met but exceeded our expectations. Their expertise and commitment to excellence are truly commendable."</p>
            </div>
          </div>

          <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg mx-2 mr-4">
            <div class="flex items-center mb-2">
                <div class="flex-shrink-0">
                    <img src="assets/images/logo-3.jpg" alt="Fadil Clark" class="w-12 h-12 rounded-full">
                </div>
                <div class="ml-4">
                    <p class="text-xl font-semibold">Fadil Clark</p>
                    <p class="text-sm text-gray-500">CMO of BCare Apps</p>
                </div>
            </div>
            <hr class="m-3">
            <div class="text-left">
              <p class="text-gray-600 mb-3 font-semibold">"A Partnership Built on Trust and Innovation!"</p>
              <p class="text-gray-500">"Partnering with Abudsoftly has been a game changer for us. Their
                team doesn't just deliver projects; they also anticipate potential
                challenges and opportunities, ensuring our operations run smoothly
                and effectively."</p>
            </div>
          </div>
        </div>
        <div class="absolute -mt-40 -ml-10 w-5 h-5 rounded-full bg-green-500"></div>
        <!-- komen end -->
    </section>

    <!-- About End -->

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
  </body>
</html>