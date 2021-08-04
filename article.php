<?php 
    include('path.php');
    include(APPROOT . '/app/controllers/posts.php');
    
    $posts = array();

    if(isset($_GET['id'])) {
        $post = selectOne('posts', ['id' => $_GET['id']]);
    }

    $tags = selectAll('tags');
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
    <title><?php echo ucwords($post['title']); ?> - Cindy's Life</title>
</head>
<body>
<div class="container-self">
    <?php include(APPROOT . '/app/includes/nav.php'); ?>
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