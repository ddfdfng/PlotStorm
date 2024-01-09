<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="assets/css/main.css">
    <title>Welcome</title>
</head>
<body class="flex items-center justify-center">
    <div class="main">
        <h2 class="text-xl mb-5">Get started</h2>
        <div class="buttons flex items-center justify-center gap-10">
            <a class="flex items-center justify-center w-40 h-12 border-solid border-black border-2 rounded transition-shadow hover:shadow-xl duration-300 cursor-pointer" href="login.php">Log in</a>
            <a class="flex items-center justify-center w-40 h-12 border-solid border-black border-2 rounded transition-shadow hover:shadow-xl duration-300 cursor-pointer" href="signup.php">Sign up</a>
        </div>
    </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>