<?php
    include "../service/database.php";

    $signin_notif ="";
    if (isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash("sha256", $password);
        $email = $_POST['email'];
        
try {
    $insert = "INSERT INTO users (username, password, email) VALUES ('$username', '$hash_password', '$email')";
    if ($db->query($insert)) {
            $signin_notif = "Akun berhasil dibuat";
    } else {
        $signin_notif = "Akun gagal dibuat";
    }
} catch (mysqli_sql_exception $e) {
    $signin_notif = $e;
}
$db->close();

        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AdBoostify</title>
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
        <div class="border-b py-3 font-bold text-black text-center text-xl tracking-widest uppercase">
            Sign In
        </div>
        <section class="mt-4">
            <i><?= $signin_notif ?></i>
            <form action="signin.php" method="POST" class="flex flex-col">
                <div class="mb-4 pt-3">
                    <label for="Email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input id="Email" name="email" class="bg-white w-full text-gray-700 focus:outline-none border-b-2 border-gray-300 focus:border-blue-600 transition duration-300 px-3 pb-2" type="email" placeholder="Email...">
                </div>
                <div class="mb-4 pt-3">
                    <label for="Username" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Username</label>
                    <input id="Username" name="username" class="bg-white w-full text-gray-700 focus:outline-none border-b-2 border-gray-300 focus:border-blue-600 transition duration-300 px-3 pb-2" type="text" placeholder="Username...">
                </div>
                <div class="mb-4 pt-3">
                    <label for="Password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input id="Password" name="password" class="bg-white w-full text-gray-700 focus:outline-none border-b-2 border-gray-300 focus:border-blue-600 transition duration-300 px-3 pb-2" type="password" placeholder="Password...">
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 font-bold py-3" name="signin" type="submit">Sign In</button>
                <div class="flex justify-between">
                    <a href="login.php" class="font-bold text-blue-600 hover:text-blue-800 no-underline hover:underline">Log In?</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>


