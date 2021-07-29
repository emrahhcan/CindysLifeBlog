<?php
    include('../../' . APPROOT . '/app/database/db.php');

    $table = 'tags';
    
    $id = '';
    $name = '';
    $description = '';

    $tags = selectAll($table);

    if(isset($_POST['add-tag'])) {
        unset($_POST['add-tag']);

        $tag_id = create($table, $_POST);
        
        $_SESSION['message'] = 'Tag has been created succesfully';
        $_SESSION['type'] = 'success';
        header('location: ' . URLROOT . '/admin/tags/index.php');
        exit();
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $tag = selectOne($table, ['id' => $id]);

        $id = $tag['id'];
        $name = $tag['name'];
        $description = $tag['description'];
    }

    if(isset($_POST['update-tag'])) {
        $id = $_POST['id'];
        
        unset($_POST['id'], $_POST['update-tag']);
        $tag_id = update($table, $id, $_POST);

        $_SESSION['message'] = 'Tag has been updated succesfully';
        $_SESSION['type'] = 'success';
        header('location: ' . URLROOT . '/admin/tags/index.php');
        exit();
    }