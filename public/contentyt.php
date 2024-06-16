<?php
session_start();
$upload_notif = isset($_SESSION['upload_notif']) ? $_SESSION['upload_notif'] : '';
unset($_SESSION['upload_notif']);
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
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
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
  <script>
    function updatePrice() {
      const basePrice = 10000;
      const targetMarketing = document.getElementById("target_marketing").value;
      const adType = document.getElementById("ad_type").value;

      let targetPrice = 0;
      let adTypePrice = 0;

      // Set prices based on target marketing
      if (targetMarketing === "anak") {
        targetPrice = 8000;
      } else if (targetMarketing === "remaja") {
        targetPrice = 10000;
      } else if (targetMarketing === "dewasa") {
        targetPrice = 12000;
      } else if (targetMarketing === "lansia") {
        targetPrice = 14000;
      } else if (targetMarketing === "lainnya") {
        targetPrice = 15000;
      }

      // Set prices based on ad type
      if (adType === "poster") {
        adTypePrice = 10000;
      } else if (adType === "vidio_pendek") {
        adTypePrice = 15000;
      } else if (adType === "vidio_panjang") {
        adTypePrice = 20000;
      }

      const totalPrice = basePrice + targetPrice + adTypePrice;
      document.getElementById("side_price_display").innerText = `Rp${totalPrice}`;
      document.getElementById("price").value = totalPrice;
    }
  </script>

  <script>
    function saveOrderAndPay() {
      const formData = new FormData();
      document.getElementById('uploadForm').submit();
      formData.append('company_name', document.querySelector('input[name="company_name"]').value);
      formData.append('product_name', document.querySelector('input[name="product_name"]').value);
      formData.append('target_marketing', document.getElementById('target_marketing').value);
      formData.append('product_type', document.getElementById('product_type').value);
      formData.append('ad_type', document.getElementById('ad_type').value);
      formData.append('price', document.getElementById('price').value);

      fetch('save_order.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'success') {
            window.location.href = 'payment.php';
          } else {
            alert(data.message);
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }
  </script>
</head>

<body class="bg-slate-100">
  <!-- Header Start -->
  <?php include "header.php" ?>
  <!-- Header End -->

  <main class="container mx-auto mt-20 p-10 bg-white shadow-lg rounded-lg">
    <!-- <?php if ($upload_notif) : ?>
      <div class="bg-<?php echo strpos($upload_notif, 'berhasil') !== false ? 'green' : 'red'; ?>-100 border-l-4 border-<?php echo strpos($upload_notif, 'berhasil') !== false ? 'green' : 'red'; ?>-500 text-<?php echo strpos($upload_notif, 'berhasil') !== false ? 'green' : 'red'; ?>-700 p-4 mb-4" role="alert">
        <p><?php echo $upload_notif; ?></p>
      </div>
    <?php endif; ?> -->
    <div class="grid md:grid-cols-2 gap-10">
      <!-- YouTube Content Upload Form -->
      <div>
        <div class="bg-red-100 rounded p-4 text-center">
          <h1 class="text-2xl font-bold text-red-600">YouTube</h1>
          <p class="text-3xl font-bold text-gray-800">Rp28.000<span class="text-lg font-normal">/Content</span></p>
        </div>
        <div class="mt-4 p-2 bg-gray-100 rounded shadow">
          <h2 class="text-xl font-bold mb-2">Upload Content</h2>
          <div class="p-4 border rounded bg-white text-center shadow">
            <img src="https://www.youtube.com/img/desktop/yt_1200.png" alt="YouTube Premium" class="mx-auto mb-2" style="width: 100px;">
            <form id="uploadForm" method="POST" action="upload.php" enctype="multipart/form-data">
              <input type="hidden" name="content_type" value="YouTube">
              <input type="hidden" name="redirect_page" value="contentyt.php">
              <input type="hidden" name="price" id="price" value="28000">
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
                  <option value="anak">Anak-anak</option>
                  <option value="remaja">Remaja</option>
                  <option value="dewasa">Dewasa</option>
                  <option value="lansia">Lansia</option>
                  <option value="lainnya">Lainnya</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="block text-gray-700">Jenis Produk:</label>
                <select name="product_type" id="product_type" class="w-full p-2 border border-gray-300 rounded" required>
                  <option value="makanan">Makanan</option>
                  <option value="fashion">Fashion</option>
                  <option value="mable">Mable</option>
                  <option value="lainnya">Lainnya</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="block text-gray-700">Jenis Iklan:</label>
                <select name="ad_type" id="ad_type" class="w-full p-2 border border-gray-300 rounded" onchange="updatePrice()" required>
                  <option value="poster">Poster</option>
                  <option value="vidio_pendek">Video Pendek</option>
                  <option value="vidio_panjang">Video Panjang</option>
                </select>
              </div>
              <input class="mt-4" type="file" name="media" required>
              <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300" type="submit" onclick="saveOrderAndPay()">Upload</button>
            </form>
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
              <div class="bg-red-100 rounded p-4 text-center">
                <h1 class="text-2xl font-bold text-red-600">Youtube</h1>
                <p class="text-3xl font-bold text-gray-800">Rp28.000<span class="text-lg font-normal">/Content</span></p>
              </div>
              <div class="mt-4 p-2 bg-gray-100 rounded shadow">
                <h2 class="text-xl font-bold mb-2">Upload Content</h2>
                <div class="p-4 border rounded bg-white text-center shadow">
                  <p1 class="text-xl font-bold mb-2">Target Pasar Anda</p1>
                  <input type="text" class="w-full border rounded p-2 mt-2" placeholder="Masukkan target pasar anda">
                  <img src="https://www.youtube.com/img/desktop/yt_1200.png" alt="YouTube Premium" class="mx-auto mb-2" style="width: 100px;">
                  <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300">Custom Content</button>
                </div>
              </div>
            </div>
            <div>
              <div class="bg-red-100 rounded p-4 text-center mb-4">
                <h2 class="text-xl font-bold text-red-600">Paket Custom Content</h2>
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
                <a href="https://app.sandbox.midtrans.com/payment-links/1718127254117">
                  <div class="flex space-x-4">
                    <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300">Bayar</button>
                  </div>
                </a>
              </div>
            </div>
          </div>
      </div>
      <div>
        <div class="bg-red-100 rounded p-4 text-center mb-4">
          <h2 class="text-xl font-bold text-red-600">Paket Custom Content</h2>
          <p class="text-gray-700">Kirimkan video anda agar kami yang mengelola</p>
          <p class="text-sm text-gray-600 mt-2">lebih mudah • target pasar terukur • usaha anda akan booming seketika</p>
        </div>
        <div class="p-8 bg-gray-50 rounded shadow">
          <h2 class="text-xl font-bold mb-4">Harga</h2>
          <ul class="text-gray-700">
            <li class="flex justify-between border-b py-1"><span>Nama Paket</span><span>Custom Content</span></li>
            <li class="flex justify-between border-b py-1"><span>Harga</span><span id="side_price_display">Rp28.000</span></li>
          </ul>
        </div>
        <div class="mt-4">
          <h2 class="text-xl font-bold mb-2">Berlangganan sekarang</h2>
          <div class="flex space-x-4">
            <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300" type="submit" onclick="saveOrderAndPay()">Bayar</button>
            <!-- <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300">Bayar</button> -->
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>