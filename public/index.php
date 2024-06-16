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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css"/>
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

      .custom-shadow {
      box-shadow: 0 4px 14px 0 rgba(0, 0, 0, 0.1);
      }

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
    </style>
  </head>
  <body class="bg-slate-100">
    
    <!-- Header Start -->
    <?php include "header.php"?>
    <!-- Header End -->

    <!-- Main Content Start -->
    <main class="max-w-[1920px] mx-auto bg-white overflow-hidden">
      <!-- Hero Section Start-->
      <section class="relative flex xl:h-screen items-center justify-between p-8 bg-white shadow-lg rounded-lg max-w-full mx-auto my-16 sm:my-0 h-screen">
        <div class="absolute inset-0 bg-image rounded-r-lg"></div>
        <div class="relative z-10 md:w-1/2 mb-8 xl:ml-12 md:ml-0 sm:ml-0 md:mb-0 bg-white bg-opacity-75 p-16 rounded-lg">
          <p class="text-[#F3BC4C] font-semibold">ADS SERVICE</p>
          <h1 class="text-5xl md:text-5xl font-bold text-gray-800 mb-4">AdBoostify: Create, Develop, Improve</h1>
          <p class="text-gray-600 mb-6">Opening up possibilities, developing business</p>
          <button class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">See projects</button>
        </div>
      </section>
      <!-- Hero Section End -->

      <!-- Fitur Utama Start -->
      <section class="text-center mt-20 max-w-2xl justify-center mx-auto">
        <div class="flex">
          <img src="../public/assets/images/shape.jpg" alt="shape" class="w-20 h-20">
          <h1 class="text-3xl font-semibold mb-8 max-w-lg">Helping You Grow Your Business: Our Comprehensive Advertising Services.</h1>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
          
        <button onclick="location.href='custom-content.html'" class="bg-white p-6 rounded-lg custom-shadow hover:bg-gray-50 transition">
            <div class="flex flex-col items-left">
              <div class="ri-brush-line mb-2 text-orange-600 text-5xl text-left"></div>
              <div class="text-left max-w-md">
                <h2 class="text-xl font-semibold">Custom Content Selection</h2>
                <p class="text-gray-500">We can support your company to select the best content</p>
              </div>
            </div>
          </button>
  
          <button onclick="location.href='media-social.html'" class="bg-white p-6 rounded-lg custom-shadow hover:bg-gray-50 transition">
            <div class="flex flex-col items-left">
              <div class="ri-clapperboard-line mb-2 text-5xl text-orange-700 text-left"></div>
              <div class="text-left max-w-md">
                <h2 class="text-xl font-semibold">Media Social Advertising</h2>
                <p class="text-gray-500">Help you to find best media social and platform to put your ads</p>
              </div>
            </div>
          </button>
        </div>
      </section>
      <!-- Fitur Utama End -->

      <!-- Layanan Ads Start -->
      <section class="container mx-auto px-6 max-w-6xl mb-10">
        <section class="text-center my-10 pt-20">
          <h2 class="text-3xl font-bold text-gray-800">We have multidisciplinary teams to meet any <span class="text-blue-600">challenge</span>.</h2>
        </section>
        <section class="flex justify-center bg-white shadow-lg rounded-lg p-8">
          <!-- Youtube Ads -->
          <button onclick="location.href='custom-content.html'" class="bg-white p-6 rounded-lg  hover:bg-gray-50 transition">
            <div class="flex flex-col place-items-center max-w-5">
              <div class="ri-youtube-line mb-2 text-7xl text-center text-sky-600"></div>
              <div class="text-center max-w-2xl">
                <h2 class="text-xl font-semibold">Youtube Ads</h2>
                <p class="text-gray-500">Our team understands the marketplace and YouTube ads algorithm.</p>
              </div>
            </div>
          </button>
          <!-- Google Ads -->
          <button onclick="location.href='custom-content.html'" class="bg-white p-6 rounded-lg  hover:bg-gray-50 transition">
            <div class="flex flex-col place-items-center max-w-5">
              <div class="ri-google-line mb-2 text-7xl text-center text-sky-600"></div>
              <div class="text-center max-w-2xl">
                <h2 class="text-xl font-semibold">Google Ads</h2>
                <p class="text-gray-500">Our team understands the marketplace and Google ads algorithm.</p>
              </div>
            </div>
          </button>
        </section>
      </section>
      <!-- Layanan Ads End -->

      <!-- Swiper News Start -->
      <section class="testimonial relative text-center max-w-6xl mx-auto p-8 mt-20">
        <div class="flex justify-center items-start px-8">
          <img src="../public/assets/images/bg-kerjasama.jpg" alt="kerjasama" width="50%" height="400px">
          <div class="flex flex-col ml-8 z10"> 
            <h1 class="text-4xl font-bold">We've stopped counting. Over 500 brands rely on us.</h1>
            <p class="text-gray-500 mt-4">Our team has expertise in editing and data analyst.</p>
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-36">
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

          <!-- <div class="testimonial-card bg-white p-8 rounded-lg shadow-lg mx-2 mr-4">
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
          </div> -->
        </div>
      </section>      
      <!-- Swiper News End -->

      <!-- Histori Section Start -->
      <section>
        <div class="max-w-6xl mx-auto mb-20">
          <div class="flex">
            <img src="assets/images/shape.jpg" alt="shape-3" width="70px" height="50px" class="ml-4">
            <h2 class="text-3xl font-semibold mb-8 text-left ml-4 mt-4">Our Success Stories</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Success Story 1 -->
            <div class="hover:scale-105 transisi bg-white p-6 rounded-lg shadow-lg">
              <img src="../public/assets/images/buletin.jpg" alt="Success Story 1" class="w-full h-48 object-cover mb-4 rounded-lg">
              <div class="text-left">
                <h3 class="text-xl font-semibold mb-2">Company A</h3>
                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae elit nec nunc lacinia feugiat. Nullam euismod, nisl id efficitur tincidunt, mauris lacus tincidunt mauris, ut lacinia nunc nisl id lectus.</p>
              </div>
            </div>
            <!-- Success Story 2 -->
            <div class="hover:scale-105 transisi bg-white p-6 rounded-lg shadow-lg">
              <img src="../public/assets/images/pocari.jpg" alt="Success Story 2" class="w-full h-48 object-cover mb-4 rounded-lg">
              <div class="text-left">
                <h3 class="text-xl font-semibold mb-2">Company B</h3>
                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae elit nec nunc lacinia feugiat. Nullam euismod, nisl id efficitur tincidunt, mauris lacus tincidunt mauris, ut lacinia nunc nisl id lectus.</p>
              </div>
            </div>
            <!-- Success Story 3 -->
            <div class="hover:scale-105 transisi bg-white p-6 rounded-lg shadow-lg">
              <img src="../public/assets/images/ultramilk.jpg" alt="Success Story 3" class="w-full h-48 object-cover mb-4 rounded-lg">
              <div class="text-left">
                <h3 class="text-xl font-semibold mb-2">Company C</h3>
                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae elit nec nunc lacinia feugiat. Nullam euismod, nisl id efficitur tincidunt, mauris lacus tincidunt mauris, ut lacinia nunc nisl id lectus.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Histori Section End -->
      
    </main>
    <!-- Main Content End -->

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

    <script src="js/script.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
  </body>
</html>