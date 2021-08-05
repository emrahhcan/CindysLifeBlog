<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/posts.php');

    adminOnly();

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
                <h2>Manage Posts</h2>
                <a href="<?php echo URLROOT . '/admin/posts/create.php' ?>">
                    <button class="all-posts">Add a New Post</button>
                </a>
                <?php include(APPROOT . '/app/includes/messages.php'); ?>
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
                                    <?php echo ucwords($post['title']); ?>
                                </td>
                                <td>Emrah</td>
                                <td><a href="update.php?id=<?php echo $post['id']; ?>" class="update">Update</a></td>
                                <td><a href="update.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
                                <?php if($post['published']): ?>
                                    <td>
                                        <a href="update.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">Draft</a>
                                    </td>
                                <?php else: ?>
                                    <td>
                                        <a href="update.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">Publish</a>
                                    </td>
                                <?php endif; ?>
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