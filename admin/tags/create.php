<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/css/admin.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-self">
        <nav class="navbar">
        <div class="toggle-menu">
            <a href="<?php echo URLROOT; ?>/index.php" class="logo">Cindy's Life</a>
            <button class="nav-toggle">
                <i class="fas fa-bars"></i>
            </button> 
        </div>
        <div class="navigation">
            <ul class="links">
                <a href="#!">
                    <li>Home</li>
                </a>
            </ul>
        </nav>
        <header class="dashboard-container">
            <div class="dashboard-menu">
                <a href="#" class="all-posts"><div>All Posts</div></a>
                <a href="#" class="all-posts"><div>All Tags</div></a>
                <a href="#" class="all-posts"><div>All Users</div></a>
            </div>
            <div class="dashboard-content">
                <h2 class="page-title">Add a New Tag</h2>
                <form action="create.html" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-big">Add Topic</button>
                    </div>
                </form>
            </div>
        </header>

    </div>
</body>
</html>
