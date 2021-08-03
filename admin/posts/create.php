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
                <?php include(APPROOT . '/app/helpers/formErrors.php'); ?> 
                <form action="create.php" method="post" enctype="multipart/form-data">
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
                                    <option selected value="<?php echo $tag['id']; ?>"><?php echo ucwords($tag['name']); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $tag['id']; ?>"><?php echo ucwords($tag['name']); ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if(empty($published)): ?>
                            <label>
                                <input type="checkbox" name="published">
                                Publish 
                                <span style="color: maroon;">(The post will be saved as draft if you don't publish)</span>
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                Publish 
                                <span style="color: maroon;">(The post will be saved as draft if you don't publish)</span>
                            </label>
                        <?php endif; ?>                      
                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Share</button>
                    </div>
                </form>
            </div>
        </header>
    </div>
<?php include(APPROOT . '/app/includes/dashboardEnd.php'); ?>