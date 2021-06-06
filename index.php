<?php 
    include('path.php');
    include(APPROOT . '/app/database/db.php');
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
            <div class="img-wrapper">
                <span class="overlay">Content</span>
                <img class="tag-images" src="assets/img/tags/cabin.png" alt="" />
            </div>
            <div class="img-wrapper">
                <span class="overlay">Content</span>
                <img class="tag-images" src="assets/img/tags/cake.png" alt="" />
            </div>
            <div class="img-wrapper">
                <span class="overlay">Content</span>
                <img class="tag-images" src="assets/img/tags/game.png" alt="" />
            </div>
            <div class="img-wrapper">
                <span class="overlay">Content</span>
                <img class="tag-images" src="assets/img/tags/submarine.png" alt="" />
            </div>
            <div class="img-wrapper">
                <span class="overlay">Content</span>
                <img class="tag-images" src="assets/img/tags/circus.png" alt="" />
            </div>
            <div class="img-wrapper">
                <span class="overlay">Content</span>
                <img class="tag-images" src="assets/img/tags/safe.png" alt="" />
            </div>
        </div>
    </section>
    <section class="about-container" id="about">
        <div class="tags-header">
            <h1 style="color: white;">About</h1>
        </div>
        <?php include(APPROOT . '/app/includes/whiteDivider.php'); ?>
    </section>
    <section class="contact-container" id="contact">
        <div class="tags-header">
            <h1>Contact Me</h1>
        </div>
        <?php include(APPROOT . '/app/includes/secondaryDivider.php'); ?>
    </section>
    <?php include(APPROOT . '/app/includes/footer.php'); ?>
</div>
<?php include(APPROOT . '/app/includes/end.php'); ?>