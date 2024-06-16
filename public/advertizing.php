<?php
session_start();
$upload_notif = isset($_SESSION['upload_notif']) ? $_SESSION['upload_notif'] : '';
unset($_SESSION['upload_notif']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advertising</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    @media (min-width: 1280px) {
      .container {
        display: flex;
        justify-content: space-between;
      }
    }

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

</html>