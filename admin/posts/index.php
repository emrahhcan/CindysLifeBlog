<?php
    include('../../path.php');
    include('../../' . APPROOT . '/app/database/db.php');
    include('../../' . APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include('../../' . APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include('../../' . APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/posts/create.php' ?>"><button class="all-posts">Add a New Post</button></a>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>This is the first sample post</td>
                            <td>Emrah</td>
                            <td><a href="#" class="update">Update</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                            <td><a href="#" class="publish">Publish</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>This is the second sample post</td>
                            <td>Cindy</td>
                            <td><a href="#" class="update">Update</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                            <td><a href="#" class="publish">Publish</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </header>

    </div>
<?php include('../../' . APPROOT . '/app/includes/dashboardEnd.php'); ?>