<?php
    include "../service/database.php";
    session_start();
    $login_notif = "";
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash("sha256", $password);

        $select = "SELECT * FROM users WHERE username='$username' 
        AND password = '$hash_password'";
        $result = $db->query($select);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;
            header("location: dashboard.php");
        }else {
            $login_notif = "data tidak ditemukan";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdBoostify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
        rel="stylesheet" />

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <i><?= $login_notif ?></i>
    <section class="flex justify-center items-center bg-blue-600 shadow-lg h-screen">
        <div class="relative z-10 md:w-full bg-white bg-opacity-75 p-8 rounded-lg">
        <a href="#" class="text-xl font-bold text-blue-600">AdBoostify</a>
        <h1 class="text-3xl block text-center font-semibold">Log In</h1>
        <hr class="p-2">
    <form action="login.php" method="POST">
        <div class="p-2">
            <label for="username" class="block text-base mb-2">Username:</label>
            <input type="text" id="username" name="username"
                   class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:borde-gray-600 "
                   placeholder="Enter username ...">
        </div>
        <div class="p-2">
            <label for="password" class="block text-base mb-2">Password:</label>
            <input type="password" id="password" name="password"
                   class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:borde-gray-600 "
                   placeholder="Enter password ...">
        </div>
        <div>
            <a href="signin.html" class="text-blue-500 px-8">create an account</a>
        </div>
        <div class="p-3">
            <button type="submit" name="login"class="bg-blue-550 text-blue-500 font-semibold px-6 py-3 rounded-full hover:text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 p-8">
                Log In
            </button>
        </div>
    </form>
    </div>
</div>
</body>
</html>

