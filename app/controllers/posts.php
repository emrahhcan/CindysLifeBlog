<?php
    include(APPROOT . '/app/database/db.php');
    include(APPROOT . '/app/helpers/postValidation.php');

    $table = 'posts';

    $errors = array();

    $id = '';
    $title = '';
    $body = '';
    $tag_id = '';
    $published = '';

    $tags = selectAll('tags');
    $posts = selectAll($table);

    if(isset($_GET['id'])) {
        $post = selectOne($table, ['id' => $_GET['id']]);

        $id = $post['id'];
        $title = $post['title'];
        $body = $post['body'];
        $tag_id = $post['tag_id'];
        $published = $post['published'];
    }
    
    if(isset($_GET['delete_id'])) {
        adminOnly();

        $count = delete($table, $_GET['delete_id']);

        $_SESSION['message'] = 'Post has been deleted successfully';
        $_SESSION['type'] = 'success';
            
        header('location: ' . URLROOT . '/admin/posts/index.php');
        exit();
    }

    if(isset($_GET['published']) && isset($_GET['p_id'])) {
        adminOnly();

        $published = $_GET['published'];
        $p_id = $_GET['p_id'];

        $count = update($table, $p_id, ['published' => $published]);

        $_SESSION['message'] = 'Post state has been changed!';
        $_SESSION['type'] = 'success';
        
        header('location: ' . URLROOT . '/admin/posts/index.php');
        exit();
    }

    if(isset($_POST['add-post'])) {
        adminOnly();

        $errors = postValidation($_POST);

        if(!empty($_FILES['image']['name'])) {
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = '../../assets/img/postImages/' . $image_name;

            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if($result) {
                $_POST['image'] = $image_name;
            } else {
                array_push($errors, 'An error occurs');
            }
        } else {
            array_push($errors, 'Post image is required!');
        }

        if(count($errors) === 0) {
            unset($_POST['add-post']);

            $_POST['user_id'] = $_SESSION['id'];
            $_POST['published'] = isset($_POST['published']) ? 1 : 0;
            $_POST['body'] = htmlentities($_POST['body']);

            $post_id = create($table, $_POST);

            $_SESSION['message'] = 'Post has been created successfully';
            $_SESSION['type'] = 'success';
            
            header('location: ' . URLROOT . '/admin/posts/index.php');
            exit();
        } else {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $tag_id = $_POST['tag_id'];
            $published = isset($_POST['published']) ? 1 : 0;
        }
    }

    if(isset($_POST['update-post'])) {
        adminOnly();
        
        $errors = postValidation($_POST);

        if(!empty($_FILES['image']['name'])) {
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = '../../assets/img/postImages/' . $image_name;

            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if($result) {
                $_POST['image'] = $image_name;
            } else {
                array_push($errors, 'An error occurs');
            }
        } else {
            array_push($errors, 'Post image is required!');
        }

        if(count($errors) === 0) {
            $id = $_POST['id'];

            unset($_POST['update-post'], $_POST['id']);

            $_POST['user_id'] = $_SESSION['id'];
            $_POST['published'] = isset($_POST['published']) ? 1 : 0;
            $_POST['body'] = htmlentities($_POST['body']);

            $post_id = update($table, $id, $_POST);

            $_SESSION['message'] = 'Post has been updated successfully';
            $_SESSION['type'] = 'success';
            
            header('location: ' . URLROOT . '/admin/posts/index.php');
            exit();
        } else {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $tag_id = $_POST['tag_id'];
            $published = isset($_POST['published']) ? 1 : 0;
        }
    }