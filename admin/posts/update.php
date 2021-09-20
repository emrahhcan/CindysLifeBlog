<?php
    include('../../path.php');
    include(APPROOT . '/app/controllers/posts.php');

    adminOnly();
    
    $pageTitle = "Cindy's Life - Update a Post";
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
                <h2>Update Posts</h2>
                <a href="<?php echo URLROOT . '/admin/posts/index.php' ?>">
                    <button class="all-posts">Manage Posts</button>
                </a>
                <?php include(APPROOT . '/app/helpers/formErrors.php'); ?> 
                <form action="update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="create-text">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body" class="ckeditor"><?php echo $body; ?></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="tag_id">
                            <option value="">Choose a Tag</option>
                            <?php foreach($tags as $key => $tag): ?>
                                <?php if(!empty($tag_id) && $tag_id == $tag['id']): ?>
                                    <option selected value="<?php echo $tag['id']; ?>"><?php echo ucwords($tag['name']); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $tag['id']; ?>"><?php echo ucwords($tag['name']); ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="button-div">
                        <button type="submit" name="update-post" class="create-button">Update Post</button>
                    </div>
                </form>
            </div>
        <!-- Dashboard Content End -->
        </header>
        <!-- Dashboard Container End -->
    </div>
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body', {
            height: 300,
            filebrowserUploadUrl: "upload.php",
            filebrowserUploadMethod: "form"
        })
    </script>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>