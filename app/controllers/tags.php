<?php
    // include('../../' . APPROOT . '/app/helpers/tagValidation.php');
    include('/Applications/MAMP/htdocs/cindyslife/app/helpers/tagValidation.php');

    $table = 'tags';
    
    $errors = array();
    $id = '';
    $name = '';
    $description = '';

    $tags = selectAll($table);

    if(isset($_POST['add-tag'])) {
        $errors = tagValidation($_POST);

        if(count($errors) === 0) {
            unset($_POST['add-tag']);

            $tag_id = create($table, $_POST);
            
            $_SESSION['message'] = 'Tag has been created succesfully';
            $_SESSION['type'] = 'success';
            header('location: ' . URLROOT . '/admin/tags/index.php');
            exit();
        } else {
            $name = $_POST['name'];
            $description = $_POST['description'];
        }
    }

    if(isset($_POST['update-tag'])) {
        $errors = tagValidation($_POST);

        if(count($errors) === 0) {
            $id = $_POST['id'];
            
            unset($_POST['id'], $_POST['update-tag']);
            $tag_id = update($table, $id, $_POST);

            $_SESSION['message'] = 'Tag has been updated succesfully';
            $_SESSION['type'] = 'success';
            header('location: ' . URLROOT . '/admin/tags/index.php');
            exit();
        } else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
        }
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $tag = selectOne($table, ['id' => $id]);

        $id = $tag['id'];
        $name = $tag['name'];
        $description = $tag['description'];
    }

    if(isset($_GET['del_id'])) {
        $id = $_GET['del_id'];
        $count = delete($table, $id);

        $_SESSION['message'] = 'Tag has been deleted succesfully';
        $_SESSION['type'] = 'success';
        header('location: ' . URLROOT . '/admin/tags/index.php');
        exit();
    }