<?php
    include('../../' . APPROOT . '/app/database/db.php');

    if(isset($_POST['add-tag'])) {
        unset($_POST['add-tag']);

        $tag_id = create('tags', $_POST);
        
        $_SESSION['message'] = 'Tag has been created succesfully';
        $_SESSION['type'] = 'success';
        
        header('location: ' . URLROOT . '/admin/tags/index.php');

        exit();
    }