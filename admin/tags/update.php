<?php
    include('../../path.php');
    include('../../' . APPROOT . '/app/database/db.php');
    include('../../' . APPROOT . '/app/controllers/tags.php');
    include('../../' . APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include('../../' . APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include('../../' . APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
            <a href="<?php echo URLROOT . '/admin/tags/index.php' ?>"><button class="all-posts">Manage Tags</button></a>
                <?php include('../../' . APPROOT . '/app/helpers/formErrors.php'); ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body">
                            <?php echo $description; ?>
                        </textarea>
                    </div>

                    <div>
                        <button type="submit" name="update-tag" class="btn btn-big">Update Tag</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
<?php include('../../' . APPROOT . '/app/includes/dashboardEnd.php'); ?>