<?php 
require_once 'load.php';

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

$previewPosts = getAllPosts();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIV AIDS Connection - Blog</title>
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
                <a href="index.php"><li class="navItem">Home</li></a>
                <a href="index.php"><li class="navItem">Campaign</li></a>
                <a href="index.php"><li class="navItem">About Us</li></a>
                <a href="index.php"><li class="navItem">Contact</li></a>
                <a href="index.php"><li class="navItem">Donate</li></a>
            </ul>
        </nav>
    </header>

    <main class="content">
    <h1>All Posts</h1>

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
    
    </main>


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