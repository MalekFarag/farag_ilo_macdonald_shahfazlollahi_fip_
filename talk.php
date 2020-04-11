<?php

    require_once 'load.php';

    $ip = $_SERVER['REMOTE_ADDR'];

if(isset($_POST['signup'])){
    $name = trim($_POST['name2']);
    $email = trim($_POST['email2']);
    $phone = trim($_POST['phone2']);

    if(!empty($name) && !empty($email) && !empty($phone)){
        //Log user in
        $message = newsletterSignup($name, $email, $phone, $ip);
    }else{
        $message = 'Please fill out the required field';
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIV AIDS Connection - London</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/066bb77ccc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="white">
            <a href="index.php"><img src="images/logo.png" alt="Logo" class="mainLogo"></a>
            <div class="burger">
                <div class="bLine"></div>
                <div class="bLine"></div>
                <div class="bLine"></div>
            </div>

        </div>
        

        <nav class="mainNav">
            <ul class="navList">
                <a href="index.php"><li class="navItem">Home</li></a>
                <a href="talk.php"><li class="navItem">Safe Sex Talks</li></a>
                <a href="support.php"><li class="navItem">Community Support</li></a>
                <a href="blog.php"><li class="navItem">Blog</li></a>
                <a href="index.php"><li class="navItem">Donate</li></a>
            </ul>
        </nav>
    </header>

    <main id='content' class="talkPage">
        <h1>Sex Talks</h1>
        <video src="video/long_vid.mp4" controls></video>

        <div class="genInfo">
            <h2>Same Gender Relationships</h2>
            <div class="box">
                <span>LGGTQ SAFE SEX GUIDE</span>
                <span>SEXUAL HEALTH FOR LESBIAN AND BISEXUAL WOMEN</span>
                <span>LIFE STAGES</span>
                <span>SAFE SEX FOR LESBIANS</span>
            </div>
        </div>

        <div class="genInfo">
            <h2>Transgender Specific</h2>
            <div class="box">
                <span>NEED TO KNOW</span>
                <span>SAFE SEX FOR TRANSGENDER PEOPLE</span>
                <span>SEXUAL HEALTH GUIDE</span>
                <span>SOCIETAL ISSUES AFFECTING TRANSGENDER PEOPLE</span>
            </div>
        </div>
    </main>


    <footer class="footer">
        <div class="newsletter">
            <h4>Join our Newsletter!</h4>
            <?php echo !empty($message)? $message: ''; ?>
            <form action="index.php" method="post">
                <input type="text" name='name2' placeholder="name" required>
                <input type="email" name='email2' placeholder="email" required>
                <input type="text" name='phone2' placeholder="phone" required>
                <button name="signup">submit</button>
            </form>
        </div>
        <nav class="footerNav">
            <ul class="navList">
            <a href="index.php"><li class="navItem">Home</li></a>
                <a href="talk.php"><li class="navItem">Safe Sex Talks</li></a>
                <a href="support.php"><li class="navItem">Community Support</li></a>
                <a href="blog.php"><li class="navItem">Blog</li></a>
                <a href="index.php"><li class="navItem">Donate</li></a>
            </ul>
        </nav>

        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <div class="extra">
            <p>HIV/AIDS Connection&copy; - London 2020</p>
        <a href="admin/index.php">admin area</a>
        </div>


    <script src="js/main.js"></script>
</body>
</html>