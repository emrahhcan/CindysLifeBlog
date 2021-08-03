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
                <a href="<?php echo URLROOT . '/admin/users/create.php' ?>"><button class="all-posts">Add a New User</button></a>
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
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td>
                                <?php
                                    if($user['admin'] === 1) {
                                        echo 'Admin';
                                    }
                                    else {
                                        echo 'Member';
                                    }
                                ?>
                            </td>
                            <td><?php echo $user['email']; ?></td>
                            <td><a href="#" class="update">Update</a></td>
                            <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </header>

    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>