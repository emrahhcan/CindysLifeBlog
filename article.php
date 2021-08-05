<?php 
    include('path.php');
    include(APPROOT . '/app/controllers/posts.php');
    
    $posts = array();

    if(isset($_GET['id'])) {
        $post = selectOne('posts', ['id' => $_GET['id']]);
    }

    $tags = selectAll('tags');

    $pageTitle = "Cindy's Life" . ' - ' . ucwords($post['title']);
    include(APPROOT . '/app/includes/blogHead.php');
?>
<div class="container-self">
    <?php include(APPROOT . '/app/includes/blogLoginNav.php'); ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo ucwords($post['title']); ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">
                                <span>Created at </span>
                                <?php echo date('Y F j', strtotime($post['created_at'])); ?>
                                <span> by </span>
                                <?php // echo ucwords($post['username']); ?>
                            </div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!"></a>
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo URLROOT . '/assets/img/postImages/' . $post['image']; ?>" alt="<?php echo $post['image'] ?>" /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4">
                                <?php echo html_entity_decode($post['body']); ?>
                            </p>
                        </section>
                    </article>
                </div>
                <!-- Side widgets-->
                <?php include(APPROOT . '/app/includes/side.php'); ?>
            </div>
        </div>
    <?php include(APPROOT . '/app/includes/footer.php'); ?>
</div>
<?php include(APPROOT . '/app/includes/end.php'); ?>