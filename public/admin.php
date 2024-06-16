<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-gray-100">
    <!-- Header Start -->
    <!-- <?php include "header.php" ?> -->
    <!-- Header End -->

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="ads.php" class="block bg-blue-500 text-white p-4 rounded-lg shadow hover:bg-blue-600 transition duration-300">
                <div class="flex items-center justify-center">
                    <div class="text-center">
                        <i class="ri-advertisement-line text-5xl mb-4"></i>
                        <h2 class="text-xl font-bold">Ads Orders</h2>
                        <p class="mt-2">Manage Ads Orders</p>
                    </div>
                </div>
            </a>
            <a href="content.php" class="block bg-green-500 text-white p-4 rounded-lg shadow hover:bg-green-600 transition duration-300">
                <div class="flex items-center justify-center">
                    <div class="text-center">
                        <i class="ri-file-list-2-line text-5xl mb-4"></i>
                        <h2 class="text-xl font-bold">Content Orders</h2>
                        <p class="mt-2">Manage Content Orders</p>
                    </div>
                </div>
            </a>
            <a href="completed_orders.php" class="block bg-gray-500 text-white p-4 rounded-lg shadow hover:bg-gray-600 transition duration-300">
                <div class="flex items-center justify-center">
                    <div class="text-center">
                        <i class="ri-check-double-line text-5xl mb-4"></i>
                        <h2 class="text-xl font-bold">Completed Orders</h2>
                        <p class="mt-2">View Completed Orders</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</body>

</html>