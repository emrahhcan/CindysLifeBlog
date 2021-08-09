<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/users.php');

    adminOnly();

    $pageTitle = "Cindy's Life - Users";
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
                <h2>Manage Users</h2>
                <a href="<?php echo URLROOT . '/admin/users/create.php' ?>">
                    <button class="all-posts">Add a New User</button>
                </a>
                <?php include(APPROOT . '/app/includes/messages.php'); ?>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($adminUsers as $key => $user): ?>
                        <tr>
                            <td data-label="ID:"><?php echo $key + 1; ?></td>
                            <td data-label="Name:"><?php echo ucfirst($user['username']); ?></td>
                            <td data-label="Role:">
                                <?php
                                    if($user['admin'] === 1) {
                                        echo 'Admin';
                                    }
                                    else {
                                        echo 'Member';
                                    }
                                ?>
                            </td>
                            <td data-label="Email:"><?php echo $user['email']; ?></td>
                            <td data-label="Action:">
                                <a href="update.php?id=<?php echo $user['id']; ?>" class="update">Update</a>
                            </td>
                            <td>
                                <button type="button" class="delete-btn">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Dashboard Content End -->
        </header>
        <!-- Dashboard Container End -->
    </div>
    <!-- Modal Start -->
    <div class="modal hidden">
      <button class="close-modal">&times;</button>
      <h1 class="modal-title">Delete User</h1>
      <p class="modal-text">Do You Really Want to Delete <?php echo ucfirst($user['username']); ?>?</p>
      <form action="index.php">
        <button type="button" class="modal-dismiss">No</button>
        <button type="submit" class="delete">
            <a href="index.php?delete_id=<?php echo $user['id']; ?>">Delete</a>
        </button>
      </form>
      </button>
    </div>
    <div class="modal-overlay hidden"></div>
    <!-- Modal End -->
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>