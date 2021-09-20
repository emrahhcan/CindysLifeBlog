<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/users.php');

    adminOnly();

    $pageTitle = "Cindy's Life - Create an User";
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
                <h2>Create Users</h2>
                <a href="<?php echo URLROOT . '/admin/users/index.php' ?>">
                    <button class="all-posts">Manage Users</button>
                </a>
                <?php include(APPROOT . '/app/helpers/formErrors.php'); ?>
                <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="create-text">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="create-text">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="create-text">
                    </div>
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="confirmPassword" value="<?php echo $confirmPassword; ?>" class="create-text">
                    </div>
                    <div>
                        <?php if(isset($admin) && ($admin === 1)): ?>
                            <label>
                                <input checked type="checkbox" name="admin">
                                <span style="color: maroon;">Admin</span>
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">
                                <span style="color: maroon;">Admin</span>
                            </label>
                        <?php endif; ?>
                    </div>
                    <div class="button-div">
                        <button type="submit" name="create-user" class="create-button">Add User</button>
                    </div>
                </form>
            </div>
            <!-- Dashboard Content End -->
        </header>
        <!-- Dashboard Container End -->
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>