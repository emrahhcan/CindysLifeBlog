<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mainTextColor">Search</h5>
        </div>
        <div class="card-body">
            <form action="blog.php" method="post">
                <div class="input-group">
                    <input class="form-control" name="search-term" type="text" placeholder="Enter search term..." aria-label="Enter search term..." />
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mainTextColor">Tags</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <?php foreach($tags as $key => $tag): ?>
                            <li>
                                <a href="<?php echo URLROOT . '/blog.php?t_id=' . $tag['id'] . '&name=' . $tag['name']; ?>" class="blogTags">
                                    <?php echo ucwords($tag['name']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>