<?php
    include('../../' . APPROOT . '/app/helpers/postValidation.php');

    $table = 'posts';
    $errors = array();

    $tags = selectAll('tags');
    $posts = selectAll($table);

    if(isset($_POST['add-post'])) {
        unset($_POST['add-post'], $_POST['tag_id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = 1;

        $post_id = create($table, $_POST);
        
        header('location: ' . URLROOT . '/admin/posts/index.php');
    }