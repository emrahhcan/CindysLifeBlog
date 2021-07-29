<?php
    include('../../path.php');
    include('../../' . APPROOT . '/app/controllers/tags.php');
    include('../../' . APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include('../../' . APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include('../../' . APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/tags/create.php' ?>"><button class="all-posts">Add a New Tag</button></a>
                <?php include('../../' . APPROOT . '/app/includes/messages.php'); ?>
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
                                    <?php echo $tag['name']; ?>
                                </td>
                                <td>
                                    <a href="update.php?id=<?php echo $tag['id']; ?>" class="update">Update</a>
                                </td>
                                <td><a href="#" class="delete">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </header>
    </div>
<?php include('../../' . APPROOT . '/app/includes/dashboardEnd.php'); ?>