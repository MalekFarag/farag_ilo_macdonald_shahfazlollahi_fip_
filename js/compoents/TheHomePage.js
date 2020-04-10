export default {


    name: "HomePage",

    template: `
    <section id="content">
         <section class="hero">
            <img src="images/hero_image.jpg" class="hero-image" alt="Image of Two Women">

            <div class="about">
                <h3>LET'S TALK ABOUT SEX</h3>
                <p class='copy'>We are a safe space to discuss and provide information regarding safe sex for everyone! We provide information especially for the LGBTQA community, explaining how to keep them healthy and
                protect themselves; no matter a persons sexual preference or gender identity..</p>
            </div>
        </section>

        <!-- about campaign section -->
        <section id="campaign">

            <div class="info">
                <h3>INFORMATION</h3>
                <p class='copy'>At an age where most are still struggling to come to terms with who they are, as a society, we have failed to do enough ease or make the journey less confusing. This why we have launched the campaign termed "Let's Talk About It", where we provide information about safer sex in the LBGTQA community.</p>

                <div class="links">
                <a href="talk.php" class="campaign-link">Get Talking</a>
                <a href="support.php" class="campaign-link">Community Support</a>
                </div>
            </div>

            <div class="content-pic">
                <img src="images/content_pic.jpg" class="content__img" alt="Image of Two Individuals">
            </div>

        </section>


        <!-- loading 3 posts -->
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

        <!-- donate section -->
        <section id="donate">
            <h2>Support The Cause</h2>
            <p class='copy'>Help us spread the word, in partnership with              
            the Regional HIV/AIDS Connection, you can support us; helping to spread the word and keep everyone healthy and protected</p>
            <!-- link to paypal or something -->
            <button type="submit">Donate</button>
        </section>

        <div class="newsletter">
            <div class="news-image">
                <img src="images/pride.jpg" class="news-pic" alt="image of a protester at a rally">
            </div>
            <h3>Stay Updated with us!</h3>
            <p class="copy">Become a member of our ever-growing community by signing up. Read the latest blog posts and get updated on upcoming events and activities.</p>
            <?php echo !empty($message)? $message: ''; ?>
            <form action="index.php" method="post">
                <input type="text" name='name2' placeholder="name" required>
                <input type="email" name='email2' placeholder="email" required>
                <input type="text" name='phone2' placeholder="phone" required>
                <button name="signup">submit</button>
            </form>
        </div>

        <!-- contact section -->
        <section id="contact">
            <h3>Contact Us</h3>

            <div class="contact-deets">
                <p class="copy">We are here to listen and would love to answer any questions you have!</p>
                <p class='copy'>We want to help so feel free to ask us anything; no matter how uncomfy it might be!</p>
            </div>

            <?php echo !empty($message)? $message: ''; ?>
            <div class="contact-form">
                <form action="index.php" method="post">
                    <input type="text" name='name' placeholder="name" required>
                    <input type="email" name='email' placeholder="email" required>
                    <input type="text" name='phone' placeholder="phone" required>
                    <textarea name="body" id="body" placeholder="message" required></textarea>
                    <button name="submit">Send</button>
                </form>
            </div>
        
        </section>
    
    `
}