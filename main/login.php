<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="assets/css/main.css">
    <title>Sign up</title>
</head>
<body class="flex items-center justify-center">
    <form class="flex flex-col p-[20px] rounded-lg gap-4 shadow-xl">
        <h1 class="text-xl">Sign up</h1>
        <div class="input-label">
            <p class="mb-2">Login</p>
            <input type="text" name="login" class="login bg-slate-100 p-[3px] border-none outline-none rounded w-full" placeholder="Enter your login">
        </div>
        <div class="input-label">
            <p class="mb-2">Password</p>
            <input type="password" name="password" class="login bg-slate-100 p-[3px] border-none outline-none rounded w-full" placeholder="Enter your password">
        </div>
        <button type="submit" class="login-btn bg-slate-200 rounded h-[40px]">Submit</button>
        <h5>Don't have an account? <a href="signup.php" class="underline">Sign up</a></h5>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>