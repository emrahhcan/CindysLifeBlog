<?php
    include('../../path.php');
    include('../../' . APPROOT . '/app/controllers/tags.php');
    include('../../' . APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include('../../' . APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include('../../' . APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/tags/index.php' ?>"><button class="all-posts">Manage Tags</button></a>
                <form action="create.php" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body"></textarea>
                    </div>

                    <div>
                        <button type="submit" name="add-tag" class="btn btn-big">Add Tag</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
<?php include('../../' . APPROOT . '/app/includes/dashboardEnd.php'); ?>