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
        <ul>
            *display all posts here*
        </ul>
        

</div>
<script src="../js/main.js"></script>
</body>
</html>