<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/tags.php');
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
                <h2>Create Tags</h2>
                <a href="<?php echo URLROOT . '/admin/tags/index.php' ?>">
                    <button class="all-posts">Manage Tags</button>
                </a>
                <?php include(APPROOT . '/app/helpers/formErrors.php'); ?>
                <form action="create.php" method="post">
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
                        <button type="submit" name="add-tag" class="btn btn-big">Add Tag</button>
                    </div>
                </form>
            </div>
            <!-- Dashboard Content End -->
        </header>
        <!-- Dashboard Container End -->
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>