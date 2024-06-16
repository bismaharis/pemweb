<?php
session_start();
include '../service/database.php'; // Koneksi ke database

$upload_notif = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['is_login']) && $_SESSION['is_login']) {
        $userId = $_SESSION['user_id'];
        $companyName = $_POST['company_name'];
        $productName = $_POST['product_name'];
        $targetMarketing = $_POST['target_marketing'];
        $productType = $_POST['product_type'];
        $adType = $_POST['ad_type'];
        $platform = $_POST['platform'];
        $totalPrice = $_POST['price'];
        $createdAt = date("Y-m-d H:i:s");

        // Save order details to session
        $_SESSION['order_details'] = [
            'company_name' => $companyName,
            'product_name' => $productName,
            'target_marketing' => $targetMarketing,
            'product_type' => $productType,
            'ad_type' => $adType,
            'platform' => $platform,
            'price' => $totalPrice
        ];

        // Menyimpan informasi ke database
        $stmt = $db->prepare("INSERT INTO ads (user_id, company_name, product_name, target_marketing, product_type, ad_type, platform, total_price, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            $upload_notif = "Gagal mempersiapkan pernyataan SQL: ";
            $_SESSION['upload_notif_type'] = 'alert-error';
        } else {
            $stmt->bind_param("issssssis", $userId, $companyName, $productName, $targetMarketing, $productType, $adType, $platform, $totalPrice, $createdAt);

            if ($stmt->execute()) {
                $upload_notif = "Pesanan berhasil ditambahkan!";
                $_SESSION['upload_notif_type'] = 'alert-success';
                header("Location: payads.php");
                exit();
            } else {
                $upload_notif = "Terjadi kesalahan saat menyimpan data ke database: ";
                $_SESSION['upload_notif_type'] = 'alert-error';
            }
            $stmt->close();
        }
    } else {
        $upload_notif = "Pengguna tidak terautentikasi.";
        $_SESSION['upload_notif_type'] = 'alert-error';
    }
} else {
    $upload_notif = "Metode permintaan tidak valid.";
    $_SESSION['upload_notif_type'] = 'alert-error';
}
$_SESSION['upload_notif'] = $upload_notif;
header("Location: " . 'advertizing.php');
exit();
