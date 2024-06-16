<?php
include "../service/database.php";
session_start();
$login_notif = "";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = hash("sha256", $password);

    // Periksa di tabel users
    $user_select = "SELECT * FROM users WHERE email='$email' AND password='$hash_password'";
    $user_result = $db->query($user_select);

    // Periksa di tabel admin
    $admin_select = "SELECT * FROM admin WHERE email='$email' AND password='$hash_password'";
    $admin_result = $db->query($admin_select);

    if ($user_result->num_rows > 0) {
        $data = $user_result->fetch_assoc();
        $_SESSION["email"] = $data["email"];
        $_SESSION["user_id"] = $data["user_id"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;
        header("location: dashboard.php");
        exit();
    } elseif ($admin_result->num_rows > 0) {
        $data = $admin_result->fetch_assoc();
        $_SESSION["email"] = $data["email"];
        $_SESSION["admin_id"] = $data["admin_id"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["is_login"] = true;
        header("location: admin.php");
        exit();
    } else {
        $login_notif = "Password atau email salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AddBostify</title>
    <style>
        .bg-image {
            background-image: url('../public/assets/images/1teamwork.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-image bg-cover bg-center text-gray-800 pt-3 md:pt-20 pb-6 px-2 md:px-0">
    <main class="bg-white bg-opacity-90 max-w-lg mx-auto p-6 rounded-lg shadow-2xl">
        <i><?= $login_notif ?></i>
        <div class="border-b py-3 font-bold text-black text-center text-xl tracking-widest uppercase">
            Selamat Datang
        </div>
        <section class="mt-4">
            <form action="login.php" method="POST" class="flex flex-col">
                <div class="mb-4 pt-3 rounded">
                    <label for="Email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input id="Email" name="email" class="bg-white bg-opacity-90 w-full text-gray-700 focus:outline-none border-b-2 border-gray-300 focus:border-blue-600 transition duration-300 px-3 pb-2" type="text" placeholder="Email...">
                </div>
                <div class="mb-4 pt-3 rounded">
                    <label for="Password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input id="Password" name="password" class="bg-white bg-opacity-90 w-full text-gray-700 focus:outline-none border-b-2 border-gray-300 focus:border-blue-600 transition duration-300 px-3 pb-2" type="password" placeholder="Password...">
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 font-bold py-3" name="login" type="submit">Login</button>
            </form>
            <div class="border-t px-1 py-6 mt-10">
                <div class="flex justify-between">
                    <a href="signin.html" class="font-bold text-blue-600 hover:text-blue-800 no-underline hover:underline">Sign In?</a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>