<?php 
    require_once '../load.php';
    confirm_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="header">
        <div class="white">
            <a href="#content"><img src="../images/logo.png" alt="Logo" class="mainLogo"></a>
            <div class="burger">
                <div class="bLine"></div>
                <div class="bLine"></div>
                <div class="bLine"></div>
            </div>

        </div>
        

        <nav class="mainNav">
            <ul class="navList">
                <a href="index.php"><li class="navItem">Home</li></a>
                <a href="admin_createpost"><li class="navItem">Write Post</li></a>
                <a href="admin_createuser.php"><li class="navItem">Create Account</li></a>
                <a href="admin_logout.php"><li class="navItem">Logout</li></a>
                <a href="../index.php"><li class="navItem">Main Site</li></a>
            </ul>
        </nav>
    </header>

<div class="dashboardPage">
    <h2>Welcome, <?php echo $_SESSION['name']; ?></h2><br>
        <ul>
            <a href="admin_createuser.php">Create User</a>
            <a href="admin_createpost.php">Create Blog Post</a>
            <a href="admin_logout.php">Logout</a>
        </ul>

        <h2>Blog Posts</h2>
        <ul class='blog'>
            <div class="blogPost">
                <h4 class='title'>Why RHAC is totally awesome</h4>
                <h5 class='subTitle'>And how you can support them!</h5>
                <h6 class='author'>Malek Farag</h6>
                <p class='date'>Feb 21st 2020</p>
                <img src="../images/opencloset.png" alt="">
                <p class='text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <button class='edit' type='submit'>edit post...</button>
            </div>

            <div class="blogPost">
                <h4 class='title'>RHAC and how they help People!</h4>
                <h5 class='subTitle'>"People are awesome", says RHAC Representative</h5>
                <h6 class='author'>Malek Farag</h6>
                <p class='date'>Feb 27st 2020</p>
                <img src="../images/pride.jpg" alt="">
                <p class='text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <button class='edit' type='submit'>edit post...</button>
            </div>
        </ul>
        

</div>
<script src="../js/main.js"></script>
</body>
</html>