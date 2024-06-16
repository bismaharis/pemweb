<?php
session_start();

$order_details = isset($_SESSION['order_details']) ? $_SESSION['order_details'] : null;

if (!$order_details) {
    header('Location: advertizing.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../service/database.php'; // Koneksi ke database

    $userId = $_SESSION['user_id'];
    $companyName = $order_details['company_name'];
    $productName = $order_details['product_name'];
    $targetMarketing = $order_details['target_marketing'];
    $productType = $order_details['product_type'];
    $adType = $order_details['ad_type'];
    $platform = 'YouTube'; // Atau nilai default lainnya
    $totalPrice = $order_details['price'];
    $createdAt = date("Y-m-d H:i:s");

    $_SESSION['upload_notif'] = 'Upload berhasil!';
    header('Location: success.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .qr-code {
            margin-top: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
</head>

<body class="bg-gray-100">
    <div class="container">
        <h1 class="text-3xl font-bold mb-5">Payment Page</h1>
        <div class="mb-4">
            <h2 class="text-2xl font-bold">Detail Pesanan</h2>
            <p>Nama Perusahaan: <?php echo $order_details['company_name']; ?></p>
            <p>Nama Produk: <?php echo $order_details['product_name']; ?></p>
            <p>Target Marketing: <?php echo $order_details['target_marketing']; ?></p>
            <p>Jenis Produk: <?php echo $order_details['product_type']; ?></p>
            <p>Jenis Iklan: <?php echo $order_details['ad_type']; ?></p>
            <p>Platform: <?php echo $order_details['platform']; ?></p>
            <p>Harga: Rp <?php echo number_format($order_details['price'], 0, ',', '.'); ?></p>
        </div>
        <p class="text-lg mb-3">Silakan scan QR code berikut untuk melakukan pembayaran:</p>
        <div id="qrcode" class="qr-code"></div>
        <script>
            const qrData = "https://example.com/payment-link"; // Ganti dengan URL atau data yang ingin dimasukkan ke QR code
            const qrCodeContainer = document.getElementById('qrcode');
            QRCode.toCanvas(qrCodeContainer, qrData, function(error) {
                if (error) console.error(error);
                console.log('QR code berhasil dibuat!');
            });
        </script>

        <form method="POST" class="mt-5">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Pembayaran Selesai</button>
        </form>
    </div>
</body>

</html>