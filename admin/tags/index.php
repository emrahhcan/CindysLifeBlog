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
                <h2>Manage Tags</h2>
                <a href="<?php echo URLROOT . '/admin/tags/create.php' ?>">
                    <button class="all-posts">Add a New Tag</button>
                </a>
                <?php include(APPROOT . '/app/includes/messages.php'); ?>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($tags as $key => $tag): ?>
                            <tr>
                                <td>
                                    <?php echo $key + 1; ?>
                                </td>
                                <td>
                                    <?php echo ucwords($tag['name']); ?>
                                </td>
                                <td>
                                    <a href="update.php?id=<?php echo $tag['id']; ?>" class="update">Update</a>
                                </td>
                                <td><a href="index.php?del_id=<?php echo $tag['id']; ?>" class="delete">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Dashboard Content End -->
        </header>
        <!-- Dashboard Container End -->
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>