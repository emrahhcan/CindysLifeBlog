<?php
    include('../../' . APPROOT . '/app/helpers/postValidation.php');

    $table = 'posts';

    $errors = array();
    $title = '';
    $body = '';
    $tag_id = '';
    $published = '';

    $tags = selectAll('tags');
    $posts = selectAll($table);

    if(isset($_POST['add-post'])) {
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

            $_POST['user_id'] = 1;
            $_POST['published'] = isset($_POST['published']) ? 1 : 0;
            $_POST['body'] = htmlentities($_POST['body']);

            $post_id = create($table, $_POST);

            $_SESSION['message'] = 'Post has been created successfully';
            $_SESSION['type'] = 'success';
            
            header('location: ' . URLROOT . '/admin/posts/index.php');
        } else {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $tag_id = $_POST['tag_id'];
            $published = isset($_POST['published']) ? 1 : 0;
        }
    }