<?php
    include('../../path.php');
    include('../../' . APPROOT . '/app/database/db.php');
    include('../../' . APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include('../../' . APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include('../../' . APPROOT . '/app/includes/dashboardMenu.php'); ?>
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
<?php include('../../' . APPROOT . '/app/includes/dashboardEnd.php'); ?>