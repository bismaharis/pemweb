<?php
<<<<<<< HEAD
session_start();
$upload_notif = isset($_SESSION['upload_notif']) ? $_SESSION['upload_notif'] : '';
unset($_SESSION['upload_notif']);
?>
<!DOCTYPE html>
<html lang="en">

=======
// process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    $product_name = $_POST['product_name'];
    $target_marketing = $_POST['target_marketing'];
    $product_type = $_POST['product_type'];
    $ad_type = $_POST['ad_type'];

    // Calculate the total price based on user input
    $prices = [
        'target_marketing' => [
            'anak' => 50000,
            'remaja' => 70000,
            'dewasa' => 100000,
            'lansia' => 80000,
            'lainya' => 60000
        ],
        'product_type' => [
            'makanan' => 30000,
            'fashion' => 40000,
            'mable' => 50000,
            'lainya' => 20000
        ],
        'ad_type' => [
            'poster' => 100000,
            'vidio_pendek' => 200000,
            'vidio_panjang' => 300000
        ]
    ];

    $total_price = $prices['target_marketing'][$target_marketing] + $prices['product_type'][$product_type] + $prices['ad_type'][$ad_type];

    // Here you can handle the process to save the data to database or further processing
    // For now, we just display the data and total price

    echo "<h1>Pesanan Anda</h1>";
    echo "Nama Perusahaan: $company_name<br>";
    echo "Nama Produk: $product_name<br>";
    echo "Target Marketing: $target_marketing<br>";
    echo "Jenis Produk: $product_type<br>";
    echo "Jenis Iklan: $ad_type<br>";
    echo "Total Harga: Rp " . number_format($total_price, 0, ',', '.') . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
>>>>>>> 30f24420bacfb87294b68a05e00faca7fa0f7380
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advertising</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
<<<<<<< HEAD
  <link rel="stylesheet" href="css/style.css" />
=======
  <link rel="stylesheet" href="css/style.css"/>
>>>>>>> 30f24420bacfb87294b68a05e00faca7fa0f7380
  <style>
    @media (min-width: 1280px) {
      .container {
        display: flex;
        justify-content: space-between;
      }
    }
<<<<<<< HEAD

    .option:hover {
      cursor: pointer;
      background-color: #f0f0f0;
    }

    .selected {
      border: 2px solid #0000ff;
      background-color: #e0e0ff;
    }

    .alert {
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
      display: none;
    }

    .alert-success {
      background-color: #4caf50;
      color: white;
      display: block;
    }

    .alert-error {
      background-color: #f44336;
      color: white;
      display: block;
    }
  </style>
  <script>
    let platform = 'Google';
    const basePrice = 10000;

    const prices = {
      target_marketing: {
        anak: 8000,
        remaja: 10000,
        dewasa: 12000,
        lansia: 14000,
        lainnya: 15000
      },
      product_type: {
        makanan: 30000,
        fashion: 40000,
        mable: 50000,
        lainnya: 20000
      },
      ad_type: {
        poster: 10000,
        vidio_pendek: 15000,
        vidio_panjang: 20000
      },
      platform: {
        Google: 20000,
        YouTube: 30000
      }
    };

    function updatePrice() {
      const targetMarketing = document.getElementById('target_marketing').value;
      const adType = document.getElementById('ad_type').value;
      const selectedPlatform = platform;

      const price = prices.target_marketing[targetMarketing] +
        prices.ad_type[adType] +
        prices.platform[selectedPlatform];

      document.getElementById('total_price').innerText = `Rp ${price.toLocaleString()}`;
      document.getElementById('price').value = price;
    }

    function selectPlatform(selectedPlatform) {
      platform = selectedPlatform;
      document.getElementById('platform').value = selectedPlatform;
      document.querySelectorAll('.option').forEach(option => option.classList.remove('selected'));
      document.getElementById(`option-${selectedPlatform.toLowerCase()}`).classList.add('selected');
      updatePrice();
    }

    window.onload = function() {
      selectPlatform('Google');
      updatePrice();
      showNotificationFromSession();
    };

    function showNotification(message, type) {
      const notification = document.getElementById('notification');
      notification.className = 'alert ' + type;
      notification.innerText = message;
      notification.style.display = 'block';
      setTimeout(() => {
        notification.style.display = 'none';
      }, 5000);
    }

    function showNotificationFromSession() {
      <?php if ($upload_notif) : ?>
        showNotification("<?php echo $upload_notif; ?>", "<?php echo $upload_notif_type; ?>");
      <?php endif; ?>
    }
  </script>
</head>

<body class="bg-slate-100">

  <!-- Header Start -->
  <?php include "header.php" ?>
  <!-- Header End -->

  <div class="container mx-auto mt-10 p-5 bg-white shadow-lg">
    <div class="w-full xl:w-6/12 p-4">
      <?php if ($upload_notif) : ?>
        <div class="alert <?php echo $upload_notif_type; ?>" role="alert">
          <p><?php echo $upload_notif; ?></p>
        </div>
      <?php endif; ?>
      <h2 class="text-2xl font-bold mb-5">Form Penyewaan Iklan</h2>

      <form id="adsForm" method="post" action="process.php">
        <div class="mb-4">
          <label class="block text-gray-700">Nama Perusahaan:</label>
          <input type="text" name="company_name" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Nama Produk:</label>
          <input type="text" name="product_name" class="w-full p-2 border border-gray-300 rounded" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Target Marketing:</label>
          <select name="target_marketing" id="target_marketing" class="w-full p-2 border border-gray-300 rounded" onchange="updatePrice()" required>
            <option value="anak" selected>Anak-anak</option>
            <option value="remaja">Remaja</option>
            <option value="dewasa">Dewasa</option>
            <option value="lansia">Lansia</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Jenis Produk:</label>
          <select name="product_type" id="product_type" class="w-full p-2 border border-gray-300 rounded" required>
            <option value="makanan" selected>Makanan</option>
            <option value="fashion">Fashion</option>
            <option value="mable">Mable</option>
            <option value="lainnya">Lainnya</option>
          </select>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Jenis Iklan:</label>
          <select name="ad_type" id="ad_type" class="w-full p-2 border border-gray-300 rounded" onchange="updatePrice()" required>
            <option value="poster" selected>Poster</option>
            <option value="vidio_pendek">Video Pendek</option>
            <option value="vidio_panjang">Video Panjang</option>
          </select>
        </div>
        <input type="hidden" name="platform" id="platform" value="Google">
        <input type="hidden" name="price" id="price" value="0">
        <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full xl:w-auto">Pesan</button>
      </form>
    </div>
    <div class="w-full xl:w-4/12 p-4">
      <h2 class="text-2xl font-bold mb-5">Pembayaran</h2>
      <div class="bg-gray-100 p-5 rounded">
        <div class="mb-4">
          <label class="block text-gray-700">Total Harga:</label>
          <div id="total_price" class="text-lg font-bold text-red-500">Rp 0</div>
        </div>
      </div>
      <div class="flex flex-row gap-x-4 mt-5">
        <div id="option-google" class="option bg-white p-6 mx-2 rounded-lg shadow transition ease-in-out duration-150 hover:shadow-lg hover:bg-gray-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50" onclick="selectPlatform('Google')">
          <div class="flex flex-col items-left">
            <div class="ri-google-line mb-2 text-7xl text-left text-sky-600"></div>
            <div class="text-left max-w-md">
              <h2 class="text-xl font-semibold">Google</h2>
            </div>
          </div>
        </div>
        <div id="option-youtube" class="option bg-white p-6 rounded-lg shadow transition ease-in-out duration-150 hover:shadow-lg hover:bg-gray-200 cursor-pointer focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50" onclick="selectPlatform('YouTube')">
          <div class="flex flex-col items-left">
            <div class="ri-youtube-line mb-2 text-7xl text-left text-sky-600"></div>
            <div class="text-left max-w-md">
              <h2 class="text-xl font-semibold">YouTube</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

=======
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
          <a href="signin.php" class="px-4 py-2 bg-blue-600 text-white rounded-3xl hover:bg-blue-700">Sign In</a>
          <a href="login.php" class="px-4 py-2 bg-white ring-blue-600 text-blue-600 rounded-3xl hover:bg-blue-600 hover:text-white">Log In</a>
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
  
    <div class="container mx-auto mt-10 p-5 bg-white shadow-lg">
      <div class="w-full xl:w-6/12 p-4 ">
        <h2 class="text-2xl font-bold mb-5">Form Penyewaan Iklan</h2>
        
        <form id="adsForm" method="POST" action="process.php">
          <div class="mb-4">
            <label class="block text-gray-700">Nama Perusahaan:</label>
            <input type="text" name="company_name" class="w-full p-2 border border-gray-300 rounded" required>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Nama Produk:</label>
            <input type="text" name="product_name" class="w-full p-2 border border-gray-300 rounded" required>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Target Marketing:</label>
            <select name="target_marketing" id="target_marketing" class="w-full p-2 border border-gray-300 rounded" onchange="updatePrice()">
              <option value="anak">Anak-anak</option>
              <option value="remaja">Remaja</option>
              <option value="dewasa">Dewasa</option>
              <option value="lansia">Lansia</option>
              <option value="lainya">Lainnya</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Jenis Produk:</label>
            <select name="product_type" id="product_type" class="w-full p-2 border border-gray-300 rounded" onchange="updatePrice()">
              <option value="makanan">Makanan</option>
              <option value="fashion">Fashion</option>
              <option value="mable">Mable</option>
              <option value="lainya">Lainnya</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700">Jenis Iklan:</label>
            <select name="ad_type" id="ad_type" class="w-full p-2 border border-gray-300 rounded" onchange="updatePrice()">
              <option value="poster">Poster</option>
              <option value="vidio_pendek">Video Pendek</option>
              <option value="vidio_panjang">Video Panjang</option>
            </select>
          </div>

          <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full xl:w-auto">Pesan</button>
        </form>
      </div>
      <div class="w-full xl:w-4/12 p-4">
        <h2 class="text-2xl font-bold mb-5">Pembayaran</h2>
        <div class="bg-gray-100 p-5 rounded">
          <div class="mb-4">
            <label class="block text-gray-700">Total Harga:</label>
            <div id="total_price" class="text-lg font-bold text-red-500">Rp 0</div>
          </div>
          <!-- Tambahkan detail pembayaran lainnya di sini -->
        </div>
      </div>
    </div> 

    <script src="js/script.js"></script>
</body>
>>>>>>> 30f24420bacfb87294b68a05e00faca7fa0f7380
</html>