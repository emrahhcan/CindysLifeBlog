<?php
    function sessionHelper($user) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are succesfully logged in';
        $_SESSION['type'] = 'success';
        header('location: ' . URLROOT . '/blog.php');

        if($_SESSION['admin']) {
            header('location: ' . URLROOT . '/index.php');
        } else {
            header('location: ' . URLROOT . '/blog.php');
        }

        exit();
    }