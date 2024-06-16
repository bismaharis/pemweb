<?php
session_start();
include '../service/database.php'; // Koneksi ke database

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
    header("Location: login.php");
    exit();
}

// Ambil data dari tabel ads
$ads_query = "SELECT * FROM ads WHERE status='waiting'";
$ads_result = $db->query($ads_query);

if (isset($_POST['complete_order'])) {
    $order_id = $_POST['order_id'];
    $table = $_POST['table'];

    // Ambil data dari tabel ads
    $select_query = "SELECT * FROM ads WHERE id=?";
    $stmt_select = $db->prepare($select_query);
    $stmt_select->bind_param("i", $order_id);
    $stmt_select->execute();
    $result = $stmt_select->get_result();
    $order_data = $result->fetch_assoc();

    // Insert data ke tabel completed_orders
    $insert_query = "INSERT INTO completed_orders (user_id, company_name, product_name, target_marketing, product_type, ad_type, platform, total_price, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert = $db->prepare($insert_query);
    $stmt_insert->bind_param("issssssds", $order_data['user_id'], $order_data['company_name'], $order_data['product_name'], $order_data['target_marketing'], $order_data['product_type'], $order_data['ad_type'], $order_data['platform'], $order_data['total_price'], $order_data['created_at']);
    $stmt_insert->execute();

    // Update status menjadi completed di tabel ads
    $update_query = "UPDATE ads SET status='completed' WHERE id=?";
    $stmt_update = $db->prepare($update_query);
    $stmt_update->bind_param("i", $order_id);
    $stmt_update->execute();

    header("Location: ads.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdBoostify - Ads</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-gray-100">
    <!-- Header Start -->
    <?php include "header.php" ?>
    <!-- Header End -->
    <div class="container mx-auto p-4">
        <nav class="mb-6">
            <a href="ads.php" class="bg-blue-500 text-white px-4 py-2 rounded">Ads</a>
            <a href="content.php" class="bg-gray-200 text-gray-800 px-4 py-2 rounded">Content</a>
            <a href="completed_orders.php" class="bg-gray-200 text-gray-800 px-4 py-2 rounded">Completed Orders</a>
        </nav>
        <h1 class="text-3xl font-bold mb-6">Ads Orders</h1>
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">User ID</th>
                    <th class="py-3 px-4 text-left">Company Name</th>
                    <th class="py-3 px-4 text-left">Product Name</th>
                    <th class="py-3 px-4 text-left">Target Marketing</th>
                    <th class="py-3 px-4 text-left">Product Type</th>
                    <th class="py-3 px-4 text-left">Ad Type</th>
                    <th class="py-3 px-4 text-left">Platform</th>
                    <th class="py-3 px-4 text-left">Total Price</th>
                    <th class="py-3 px-4 text-left">Created At</th>
                    <th class="py-3 px-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
                <?php
                if ($ads_result->num_rows > 0) {
                    while ($row = $ads_result->fetch_assoc()) {
                        echo "<tr class='border-b border-gray-200'>
                                <td class='py-3 px-4'>{$row['id']}</td>
                                <td class='py-3 px-4'>{$row['user_id']}</td>
                                <td class='py-3 px-4'>{$row['company_name']}</td>
                                <td class='py-3 px-4'>{$row['product_name']}</td>
                                <td class='py-3 px-4'>{$row['target_marketing']}</td>
                                <td class='py-3 px-4'>{$row['product_type']}</td>
                                <td class='py-3 px-4'>{$row['ad_type']}</td>
                                <td class='py-3 px-4'>{$row['platform']}</td>
                                <td class='py-3 px-4'>{$row['total_price']}</td>
                                <td class='py-3 px-4'>{$row['created_at']}</td>
                                <td class='py-3 px-4'>
                                    <form method='POST' action=''>
                                        <input type='hidden' name='order_id' value='{$row['id']}'>
                                        <input type='hidden' name='table' value='ads'>
                                        <button type='submit' name='complete_order' class='bg-blue-500 text-white px-4 py-2 rounded'>Complete</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11' class='py-3 px-4 text-center'>Tidak ada data pesanan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>