<?php 
    include('path.php');
    include(APPROOT . '/app/controllers/tags.php');
    
    $posts = array();
    $blogPageTitle = 'Recent Articles';

    if(isset($_GET['t_id'])) {
        $posts = getPostsByTagID($_GET['t_id']);
        $blogPageTitle = 'You are looking under ' . '"' . lcfirst($_GET['name']) . '"' . ' tag';
    } else if(isset($_POST['search-term'])) {
        $blogPageTitle = 'You are looking for ' . '"' . $_POST['search-term'] . '"';
        $posts = searchPosts($_POST['search-term']);
    } else {
        $posts = getPublishedPosts();
    }

    $pageTitle = "Cindy's Life - Blog";
    include(APPROOT . '/app/includes/blogHead.php');
?>
    <div class="container-self">
        <?php include(APPROOT . '/app/includes/blogLoginNav.php'); ?>
        <div class="container">
        <?php include(APPROOT . '/app/includes/messages.php'); ?>
            <header class="blog-img py-5 bg-light border-bottom mb-4">
                <div class="container">
                    <div class="text-center my-5 mainTextColor">
                        <h1 class="fw-bolder">Welcome to Cindy's Life</h1>
                        <div class="tags-divider">
                            <div class="tags-divider-line"></div>
                            <div class="tags-divider-icon"><i class="fas fa-star"></i></div>
                            <div class="tags-divider-line"></div>
                        </div>
                        <p class="lead mb-0">
                            <h3><?php echo $blogPageTitle; ?></h3>
                        </p>
                    </div>
                </div>
            </header>
            <!-- Page content-->
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <?php foreach($posts as $post): ?>
                        <div class="card mb-4">
                            <a href="article.php?id=<?php echo $post['id']; ?>"><img class="card-img-top" src="<?php echo URLROOT . '/assets/img/postImages/' . $post['image']; ?>" alt="<?php echo $post['image'] ?>" /></a>
                            <div class="card-body">
                                <div class="small text-muted">
                                    <span>Created at </span>
                                    <?php echo date('Y F j', strtotime($post['created_at'])); ?>
                                    <span> by </span>
                                    <?php echo ucwords($post['username']); ?>
                                    <br>
                                </div>
                                <h2 class="card-title"><?php echo ucwords($post['title']); ?></h2>
                                <p class="card-text">
                                    <?php echo html_entity_decode(substr($post['body'], 0, 250) . '...'); ?>
                                </p>
                                <a class="btn btn-primary" href="article.php?id=<?php echo $post['id']; ?>">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Side widgets-->
                <?php include(APPROOT . '/app/includes/side.php'); ?>
            </div>
        </div>

        <?php include(APPROOT . '/app/includes/footer.php'); ?>
    </div>
<?php include(APPROOT . '/app/includes/end.php'); ?>