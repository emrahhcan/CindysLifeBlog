<?php
    include('../../path.php');
    include('../../' . APPROOT . '/app/database/db.php');
    include('../../' . APPROOT . '/app/controllers/posts.php');
    include('../../' . APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include('../../' . APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include('../../' . APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/posts/create.php' ?>"><button class="all-posts">Add a New Post</button></a>
                <?php include('../../' . APPROOT . '/app/includes/messages.php'); ?>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($posts as $key => $post): ?>
                            <tr>
                                <td>
                                    <?php echo $key + 1; ?>
                                </td>
                                <td>
                                    <?php echo $post['title']; ?>
                                </td>
                                <td>Emrah</td>
                                <td><a href="update.php?id=<?php echo $post['id']; ?>" class="update">Update</a></td>
                                <td><a href="update.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
                                <?php if($post['published']): ?>
                                    <td>
                                        <a href="#" class="unpublish">Draft</a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                        <a href="#" class="publish">Publish</a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </header>

    </div>
<?php include('../../' . APPROOT . '/app/includes/dashboardEnd.php'); ?>