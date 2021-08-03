<?php
    include('../path.php');
    include(APPROOT . '/app/controllers/posts.php');
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
                <h2>
                    Welcome <span style="color: pink;"><?php echo ucfirst($_SESSION['username']); ?></span>
                    <p>You Look Perfect Today :)</p>
                </h2>
                <?php include(APPROOT . '/app/includes/messages.php'); ?>
            </div>
        <!-- Dashboard Content End -->
        </header>
        <!-- Dashboard Container End -->
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>