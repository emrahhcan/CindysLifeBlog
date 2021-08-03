<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/users.php');
    include(APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include(APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include(APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/users/index.php' ?>"><button class="all-posts">Manage Users</button></a>
                <?php include(APPROOT . '/app/helpers/formErrors.php'); ?>
                <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username"
                            class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password"
                            class="text-input">
                    </div>
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="confirmPassword"
                            class="text-input">
                    </div>
                    <div>
                        <label>
                            <input type="checkbox" name="admin">
                            <span style="color: maroon;">Admin</span>
                        </label>
                    </div>
                    <div>
                        <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>