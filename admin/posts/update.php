<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/posts.php');
    include(APPROOT . '/app/includes/dashboardHead.php');
?>
    <div class="container-self">
        <?php include(APPROOT . '/app/includes/dashboardNav.php'); ?>
        <header class="dashboard-container">
            <?php include(APPROOT . '/app/includes/dashboardMenu.php'); ?>
            <div class="dashboard-content">
                <a href="<?php echo URLROOT . '/admin/posts/index.php' ?>"><button class="all-posts">Manage Posts</button></a>
                <form action="update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body">
                            <?php echo $body; ?>
                        </textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="tag_id" class="text-input">
                            <option value="">Choose a Tag</option>
                            <?php foreach($tags as $key => $tag): ?>
                                <?php if(!empty($tag_id) && $tag_id == $tag['id']): ?>
                                    <option selected value="<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $tag['id']; ?>"><?php echo $tag['name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>