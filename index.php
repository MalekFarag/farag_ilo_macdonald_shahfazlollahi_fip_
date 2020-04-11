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

    $previewPosts = previewPosts();


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

    <!-- main content container -->
    <main id="content">

        <!-- about section -->
        <section class="hero">
            <img src="images/hero.jpg" alt="love">
            <div class="heroInfo">
                <h1 class='heroHead'>Let's Talk About Sex</h1>
                <p class='heroP'>We are a safe space to discuss and provide information regarding safe sex for everyone! We provide information especially for the LGBTQA community, explaining how to keep them healthy and
                protect themselves; no matter a persons sexual preference or gender identity...</p>

            </div>
            
            
        </section>

            <div class="about">
                <h2>Information</h2>
                <p class='copy'>At an age where most are still struggling to come to terms with who they are, as a society, we have failed to do enough ease or make the journey less confusing. This why we have launched the campaign termed "Let's Talk About It", where we provide information about safer sex in the LBGTQA community.</p>
                <div class="adiv">
                    <a href="talk.php" class="campaign-link">Get Talking</a>
                    <a href="support.php" class="campaign-link">Community Support</a>
                </div>
            </div>
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
        </section>

        <!-- loading 3 posts -->
        <h2 class='blogHead'>Blog Posts</h2>
        <div class="blog">
            <?php while ($row = $previewPosts->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="blogPost">
                <h4 class='title'><?php echo $row['title']; ?></h4>
                <h5 class='subTitle'><?php echo $row['sub_title']; ?></h5>
                <h6 class='author'><?php echo $row['author']; ?></h6>
                <p class='date'><?php echo $row['date']; ?></p>
                <img src="images/<?php echo $row['image']; ?>" alt="image">
                <p class='text'><?php echo $row['text']; ?></p>
                <a href="blog.php" class='edit'>Learn More...</a>
            </div>
            <?php endwhile; ?>
        </div>


        <!-- contact section -->
        <section id="contact">
            <h2>We want to hear from you!</h2>
            <p class='copy'>We are here to listen and would love to answer any questions you have!. We want to help so feel free to ask us anything; no matter how uncomfy it might be!</p>
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
            <h2>Help us spread the word</h2>
            <p class='copy'>In partnership with the Regional HIV/AIDS Connection, you can support us; helping raise awareness and keep everyone healthy and protected</p>
            <!-- link to paypal or something -->
            <button type="submit">Donate</button>
        </section>

    </main>
    <!-- end of main content -->


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