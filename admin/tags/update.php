<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/tags.php');

    adminOnly();

    $pageTitle = "Cindy's Life - Update a Tag";
    include(APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <!-- Dashboard Navigation -->
        <?php include(APPROOT . '/app/includes/dashboardNav.php'); ?>
        <!-- Dashboard Navigation End -->
        <!--  -->
        <!-- Dashboard Container -->
        <header class="dashboard-container">
            <!-- Dashboard Menu -->
            <?php include(APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <!-- Dashboard Menu End -->
            <!--  -->
            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <h2>Update Tags</h2>
                <a href="<?php echo URLROOT . '/admin/tags/index.php' ?>">
                    <button class="all-posts">Manage Tags</button>
                </a>
                <?php include(APPROOT . '/app/helpers/formErrors.php'); ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" class="create-text">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body" class="create-textarea"><?php echo $description; ?></textarea>
                    </div>             
                    <div class="button-div">
                        <button type="submit" name="update-tag" class="create-button">Update Tag</button>
                    </div>
                </form>
            </div>
            <!-- Dashboard Content End -->
        </header>
        <!-- Dashboard Container End -->
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>