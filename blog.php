<?php 
    include('path.php');
    include(APPROOT . '/app/controllers/tags.php');
    
    $posts = array();
    $blogPageTitle = 'Recent Articles';

    if(isset($_POST['search-term'])) {
        $blogPageTitle = 'You are looking for ' . '"' . $_POST['search-term'] . '"';
        $posts = searchPosts($_POST['search-term']);
    } else {
        $posts = getPublishedPosts();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URLROOT; ?>/assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <title>Cindy's Life</title>
</head>
<body>
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
                            <a href="#!"><img class="card-img-top" src="<?php echo URLROOT . '/assets/img/postImages/' . $post['image']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">
                                    <?php echo date('F j, Y', strtotime($post['created_at'])); ?> 
                                    by
                                    <?php echo ucwords($post['username']); ?>
                                </div>
                                <h2 class="card-title"><?php echo $post['title']; ?></h2>
                                <p class="card-text">
                                    <?php echo html_entity_decode(substr($post['body'], 0, 250) . '...'); ?>
                                </p>
                                <a class="btn btn-primary" href="#!">Read More</a>
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