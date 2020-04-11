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


    <main id="content" class='talkPage'>
        <h1>Community Support</h1>
        <div class="list">
            <h2>Links</h2>
            <ul>
                <a class="support-link" href="http://www.springtideresources.org/sites/all/files/Trans%20Women%20Safer%20Sex%20Guide.pdf">Spring Tide</a>
                <a class="support-link"  href="https://www.toronto.ca/community-people/health-wellness-care/sexual-health-infoline-ontario/">Ontario Health and Wellness</a>
                <a class="support-link"  href="https://www.ovc.gov/pubs/forge/tips_outreach.html">Outreach</a>
                <a class="support-link"  href="https://seawayvalleychc.ca/lgbtq-resources/">Seaway Valley</a>
                <a class="support-link"  href="https://www.youthline.ca/">YouthLine</a>
                <a class="support-link"  href="https://www.sexandu.ca">Sex & U</a>
                <a class="support-link"  href="https://www.scarleteen.com/">Scarlet Teen</a>
            </ul>
        </div>

        <h2>Crisis</h2>
                <h4>If You are in a situation where you need someone to talk to:</h4>
                <p class="copy">Call a counsellor: 1-800-668-6868 </p>
                <a href='https://kidsphone.ca/' class="copy">https://kidsphone.ca/</a>


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