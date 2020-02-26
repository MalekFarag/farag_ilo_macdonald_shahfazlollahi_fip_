<?php 
    require_once 'load.php';

    $ip = $_SERVER['REMOTE_ADDR'];

    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $body = trim($_POST['body']);

        if(!empty($name) && !empty($email) && !empty($phone) && !empty($body)){
            //Log user in
            $message = sendMessage($name, $email, $phone, $body, $ip);
        }else{
            $message = 'Please fill out the required field';
        }
    }

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
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/066bb77ccc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="white">
            <a href="#content"><img src="images/logo.png" alt="Logo" class="mainLogo"></a>
            <div class="burger">
                <div class="bLine"></div>
                <div class="bLine"></div>
                <div class="bLine"></div>
            </div>

        </div>
        

        <nav class="mainNav">
            <ul class="navList">
                <a href="#content"><li class="navItem">Home</li></a>
                <a href="#campaign"><li class="navItem">Campaign</li></a>
                <a href="#about"><li class="navItem">About Us</li></a>
                <a href="#contact"><li class="navItem">Contact</li></a>
                <a href="#donate"><li class="navItem">Donate</li></a>
            </ul>
        </nav>
    </header>

    <!-- main content container -->
    <main id="content">

        <!-- hero image  -->
        <section class="hero">
            <h2>Hi, <br>
                We're here to help... <br>
                <span>Everyone</span> 
            </h2>

        </section>

        <div class="divide1"></div>

        <!-- about campaign section -->
        <section id="campaign">
            <div class="buzz">
                <i class="fas fa-hotdog"></i>
                <p>Safe sex is great sex <br>
                    <span>safety should always come first</span></p>
            </div>

            <div class="buzz">
                <i class="fas fa-dove"></i>
                <p>The Birds and the Bees <br>
                    <span>sadly they don't wear condoms...</span</p>
            </div>

            <div class="buzz">
                <i class="fas fa-book"></i>
                <p>Come get some...info <br>
                    <span class="learn">Learn more...</span></p>
            </div>
        </section>

        <p class="buzzCopy">Traditional safe sex guides are often structured in a way that presumes everyone’s gender
            (male/female/nonbinary/trans) is the same as the sex they were assigned at birth (male/female/intersex
            or differences in sexual development).</p>

        <div class="divide"></div>

        <!-- about section -->
        <section id="about">
            <h2>About Us</h2>
            <img src="images/about.jpg" alt="people happy">
            <p>At an age where most are still struggling to come to terms with who they are, as a society, we have
                failed to do enough ease or make the journey less confusing. This why we have launched the campaign
                termed "Safe space: The birds and the Bees" where we provide information about safer sex in the
                LBGTQA community.</p>
        </section>

        <!-- contact section -->
        <section id="contact">
            <h2>We want to hear from you!</h2>
            <p>We're here to help</p>

            <?php echo !empty($message)? $message: ''; ?>
            <form action="index.php" method="post">
                <input type="text" name='name' placeholder="name" required>
                <input type="email" name='email' placeholder="email" required>
                <input type="text" name='phone' placeholder="phone" required>
                <textarea name="body" id="body" placeholder="message" required></textarea>
                <button name="submit">Send</button>
            </form>
        </section>

        <div class="divide"></div>

        <!-- donate section -->
        <section id="donate">
            <h2>Help us spread the word</h2>
            <p>your generous donation goes directly to helping people in need</p>
            <!-- link to paypal or something -->
            <button type="submit">Donate</button>
        </section>

        <div class="divide"></div>
    </main>
    <!-- end of main content -->


    <footer class="footer">
        <div class="newsletter">
            <h4>Stay Updated with us!</h4>
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
                <a href="#content"><li class="navItem">Home</li></a>
                <a href="#campaign"><li class="navItem">Campaign</li></a>
                <a href="#about"><li class="navItem">About Us</li></a>
                <a href="#contact"><li class="navItem">Contact</li></a>
                <a href="#donate"><li class="navItem">Donate</li></a>
            </ul>
        </nav>

        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>


    <script src="js/main.js"></script>
</body>
</html>