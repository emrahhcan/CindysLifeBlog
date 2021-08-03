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
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="confirmPassword" value="<?php echo $confirmPassword; ?>" class="text-input">
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
                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User Info</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>