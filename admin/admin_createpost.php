<?php 
    require_once '../load.php';
    confirm_logged_in();

    if(isset($_POST['submit'])){
        $author = trim($_POST['author']);
        $title = trim($_POST['title']);
        $sub_title = trim($_POST['sub_title']);
        $text = trim($_POST['text']);
        $date = trim($_POST['date']);
        

        if(!empty($author) && !empty($title) && !empty($sub_title) && !empty($text) && !empty($date)){
            //Log user in
            $message = createpost($author, $title, $sub_title, $text, $date);
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
    <title>Document</title>
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


<main class="adminArea createPostPage">
    <h2>create blog post</h2>
    <?php echo !empty($message)? $message: ''; ?>
        <form action="admin_createpost.php" method="post">
            <label for="author">author:</label>
            <input type="author" name="author" id="author" value="">

            <label for="date">date:</label>
            <input type="text" name="date" id="date" value="">

            <label for="title">title:</label>
            <input type="text" name="title" id="title" value="">

            <label for="sub_title">sub_title:</label>
            <input type="sub_title" name="sub_title" id="sub_title" value="">

            <label for="text">Blog text:</label>
            <p>See image under for formatting:</p>
            <img src="images/postformatting.pdf" alt="instructions">
            <textarea type="text" name="text" id="text" value=""></textarea>

            
            <button name="submit">Submit</button>

        </form>
</main>

    <script src="../js/main.js"></script>
</body>
</html>