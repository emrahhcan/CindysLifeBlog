<?php
    include('../../path.php');
?>
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
    <title>Cindy's Life - Update Post</title>
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
                <a href="<?php echo URLROOT . '/index.php'; ?>">
                    <li>Home</li>
                </a>
                <a href="<?php echo URLROOT; ?>/logout.php">
                    <li>Log Out</li>
                </a>
            </ul>
        </nav>
        <header class="dashboard-container">
            <div class="dashboard-menu">
                <a href="<?php echo URLROOT . '/admin/posts/index.php'; ?>" class="all-posts"><div>All Posts</div></a>
                <a href="<?php echo URLROOT . '/admin/tags/index.php'; ?>" class="all-posts"><div>All Tags</div></a>
                <a href="<?php echo URLROOT . '/admin/users/index.php'; ?>" class="all-posts"><div>All Users</div></a>
            </div>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/tags/index.php' ?>"><button class="all-posts">Manage Posts</button></a>
                <form action="create.html" method="post">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="topic" class="text-input">
                            <option value="Poetry">Poetry</option>
                            <option value="Life Lessons">Life Lessons</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-big">Edit Post</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
    <script src="../../assets/javascript/menuToggler.js"></script>
</body>
</html>