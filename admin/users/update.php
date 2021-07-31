<?php
    include('../../path.php');
    include(APPROOT . '/app/database/db.php');
    include(APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include(APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include(APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/users/index.php' ?>"><button class="all-posts">Manage Users</button></a>
                <form action="create.html" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="passwordConf" class="text-input">
                    </div>
                    <div>
                        <label>Authorization</label>
                        <select name="role" class="text-input">
                            <option value="Author">Member</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-big">Update User Info</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>