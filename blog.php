<?php 
    include('path.php');
    include(APPROOT . '/app/database/db.php');
    include(APPROOT . '/app/controllers/tags.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <title>Cindy's Life</title>
</head>
<body>
    <div class="container-self">
        <?php include(APPROOT . '/app/includes/nav.php'); ?>
        <div class="container">
        <?php include(APPROOT . '/app/includes/messages.php'); ?>
            <header class="blog-img py-5 bg-light border-bottom mb-4">
                <div class="container">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder">Welcome to My Blog</h1>
                        <div class="tags-divider">
                            <div class="tags-divider-line"></div>
                            <div class="tags-divider-icon"><i class="fas fa-star"></i></div>
                            <div class="tags-divider-line"></div>
                        </div>
                        <p class="lead mb-0">Let's Get Started</p>
                    </div>
                </div>
            </header>
            <!-- Page content-->
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2021</div>
                            <h2 class="card-title">Featured Post Title</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                <?php include(APPROOT . '/app/includes/side.php'); ?>
            </div>
        </div>

        <?php include(APPROOT . '/app/includes/footer.php'); ?>
    </div>
<?php include(APPROOT . '/app/includes/end.php'); ?>