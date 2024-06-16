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
        $price = $_POST['price']; // Harga yang telah dihitung
        $redirectPage = isset($_POST['redirect_page']) ? $_POST['redirect_page'] : 'default_page.php'; // Mendapatkan halaman redirect

        // Menangani unggahan file
        if (isset($_FILES['media']) && $_FILES['media']['error'] == 0) {
            $fileTmpPath = $_FILES['media']['tmp_name'];
            $fileName = $_FILES['media']['name'];
            $uploadPath = 'uploads/' . $fileName;

            if (!is_dir('uploads')) {
                mkdir('uploads', 0777, true);
            }

            if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                // Menyimpan informasi konten ke database
                $stmt = $db->prepare("INSERT INTO content (user_id, company_name, product_name, target_marketing, product_type, ad_type, media_path, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("issssssd", $userId, $companyName, $productName, $targetMarketing, $productType, $adType, $uploadPath, $price);

                if ($stmt->execute()) {
                    $upload_notif = "Konten berhasil diunggah dan disimpan.";
                } else {
                    $upload_notif = "Terjadi kesalahan saat menyimpan data ke database.";
                }
                $stmt->close();
            } else {
                $upload_notif = "Terjadi kesalahan saat mengunggah file.";
            }
        } else {
            $upload_notif = "Tidak ada file yang diunggah atau terjadi kesalahan.";
        }
    } else {
        $upload_notif = "Pengguna tidak terautentikasi.";
    }

    // Simpan notifikasi ke sesi dan redirect kembali ke halaman yang sesuai
    $_SESSION['upload_notif'] = $upload_notif;
    header("Location: " . $redirectPage);
    exit();
} else {
    $upload_notif = "Metode permintaan tidak valid.";
    $_SESSION['upload_notif'] = $upload_notif;
    header("Location: " . $_POST['redirect_page']);
    exit();
}
