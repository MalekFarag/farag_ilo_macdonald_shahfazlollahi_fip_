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

        <!-- about section -->
        <section class="hero">
            <img src="images/rose.png" class='rose' alt="rose">
            <div class="logoCircle">
                <p>SAFE</p>
                <div class="line"></div>
                <p>SPACE</p>
            </div>

            <div class="about">
                <h2>About</h2>
                <p class='copy'>We are a safe space to discuss and provide information regarding safe sex for everyone! We provide information especially for the LGBTQA community, explaining how to keep them healthy and protect themselves; no matter a persons sexual preference or gender identity.</p>
            </div>
        </section>

        <!-- about campaign section -->
        <section id="campaign">
            <div class="buzzwords">
                <div class="buzz">
                    <i class="fas fa-hotdog"></i>
                    <p>Safe sex is great sex <br>
                        <span>info on safe sex</span></p>
                </div>

                <div class="buzz">
                    <i class="fas fa-dove"></i>
                    <p>The Birds and the Bees <br>
                        <span>any gender relationship</span</p>
                </div>

                <div class="buzz">
                    <i class="fas fa-book"></i>
                    <p>Community Support <br>
                        <span class="learn">Let's learn together</span></p>
                </div>
            </div>

            <div class="info">
                <h2>Information</h2>
                <p class='copy'>At an age where most are still struggling to come to terms with who they are, as a society, we have failed to do enough ease or make the journey less confusing. This why we have launched the campaign termed "Safe space: The birds and the Bees" where we provide information about safer sex in the LBGTQA community.</p>

            </div>
            

            <img src="images/rose.png" class='rose' alt="rose">
        </section>

        <ul class='blog'>
            <div class="blogPost">
                <h4 class='title'>Why RHAC is Totally Awesome</h4>
                <h5 class='subTitle'>And how you can support them!</h5>
                <h6 class='author'>Malek Farag</h6>
                <p class='date'>Feb 21st 2020</p>
                <img src="images/opencloset.png" alt="">
                <p class='text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <button class='edit' type='submit'>Learn More...</button>
            </div>

            <div class="blogPost">
                <h4 class='title'>RHAC and how they help People!</h4>
                <h5 class='subTitle'>"People are awesome", says RHAC Representative</h5>
                <h6 class='author'>Malek Farag</h6>
                <p class='date'>Feb 27st 2020</p>
                <img src="images/pride.jpg" alt="">
                <p class='text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <button class='edit' type='submit'>Learn More...</button>
            </div>
        </ul>


        <!-- contact section -->
        <section id="contact">
            <img src="images/rose.png" class='rose' alt="">
            <h2>We want to hear from you!</h2>
            <p class='copy'>We're here to help and would love to answer any questions you have!
            </p>
            <?php echo !empty($message)? $message: ''; ?>
            <form action="index.php" method="post">
                <input type="text" name='name' placeholder="name" required>
                <input type="email" name='email' placeholder="email" required>
                <input type="text" name='phone' placeholder="phone" required>
                <textarea name="body" id="body" placeholder="message" required></textarea>
                <button name="submit">Send</button>
            </form>

           
        </section>

        <!-- donate section -->
        <section id="donate">
        <img src="images/rose.png" class='rose' alt="">
            <h2>Help us spread the word</h2>
            <p class='copy'>In partnership with the Regional HIV/AIDS Connection, you can support us; helping raise awareness and keep everyone healthy and protected</p>
            <!-- link to paypal or something -->
            <button type="submit">Donate</button>
        </section>

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

    <div class="extra">
            <p>HIV/AIDS Connection&copy; - London 2020</p>
        <a href="admin/index.php">admin area</a>
        </div>


    <script src="js/main.js"></script>
</body>
</html>