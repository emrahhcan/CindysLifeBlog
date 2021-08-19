<?php 
    include('path.php');
    include(APPROOT . '/app/controllers/tags.php');
    include(APPROOT . '/app/controllers/contactForm.php');

    $pageTitle = "Cindy's Life";
    include(APPROOT . '/app/includes/head.php'); 
?>
<div class="container-self">
    <?php include(APPROOT . '/app/includes/nav.php'); ?>
    <header class="masthead" id="home">
        <div class="masthead-avatar">
            <img src="<?php echo URLROOT; ?>/assets/img/cindy.png">
        </div>
        <div class="masthead-header">
            <h1>馮馨儀</h1>
        </div>
        <?php include(APPROOT . '/app/includes/whiteDivider.php'); ?>
        <div class="masthead-footer">
            <h2>Life - Food - Travel</h1>
        </div>
    </header>
    <section class="tags-container" id="tags">
        <div class="tags-header">
            <h1>Tags</h1>
        </div>
        <?php include(APPROOT . '/app/includes/secondaryDivider.php'); ?>
        <div class="tags-content">
            <?php foreach($tags as $tag): ?>
                <div class="img-wrapper">
                    <a href="<?php echo URLROOT . '/blog.php?t_id=' . $tag['id'] . '&name=' . $tag['name']; ?>">
                    <span class="overlay">
                        <p><?php echo ucwords($tag['name']); ?></p>  
                    </span>
                    <img class="tag-images" src="<?php echo URLROOT . '/assets/img/tagImages/' . $tag['image']; ?>" alt="<?php echo $tag['image'] ?>" />
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="about-container" id="about">
        <div class="tags-header">
            <h1 style="color: white;">About</h1>
        </div>
        <?php include(APPROOT . '/app/includes/whiteDivider.php'); ?>
        <div class="about-me">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;My name is Cindy Feng, from Pingtung County. I like traveling and playing Lego. I always plan trips by myself and take my family and friends to travel, so I learned how to arrange a schedule and time control.
            </p>
            <br />
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;I worked as a server at Ten Ren Tea for six months when I was a university student. During the six months, I learned how to communicate with customers and actively discover their needs. In addition, I also experienced the importance of corporate with colleagues. We were very willing to help each other at work. Therefore, I made many friends in that time.
            </p>
            <br />
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;After graduating from the university, I worked as the C&B assistant of Pizza Hut headquarter. I was responsible for calculating the salaries of 2000 part-time staff. Salary calculations are very rigorous and complicated. In addition to checking whether each store has entered incorrect information, I also needed to  ensure that every kind of money is correct. In this job, I have learned Excel operation and increased my careful and logical thinking ability.
            </p>
            <br />
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;Since November 2019, I went to the U.S. to study for eleven months in ELS language school. In an English-only environment, I improved my English skill. In addition, I have also met many friends from different countries and participated in activities in the language school. I have also increased my horizons and learned many different cultures.
            </p>
        </div>
    </section>
    <section class="contact-container" id="contact">
        <div class="tags-header">
            <h1>Contact</h1>
        </div>
        <?php include(APPROOT . '/app/includes/secondaryDivider.php'); ?>
        <div class="contact-content">
            <?php include(APPROOT . '/app/helpers/contactValidation.php'); ?>
            <form action="index.php" method="post">
                <div class="contact-name">
                    <input type="text" placeholder="Name" name="name" />
                </div>
                <div class="contact-email">
                    <input type="email" placeholder="Email Address" name="email" />
                </div>
                <div class="contact-message">
                    <textarea placeholder="Your Message" name="message"></textarea>
                </div>
                <div class="contact-btn">
                    <button type="submit" name="submit">Send</button>
                </div>
            </form>
        </div>
    </section>
    <?php include(APPROOT . '/app/includes/footer.php'); ?>
</div>
<?php include(APPROOT . '/app/includes/end.php'); ?>