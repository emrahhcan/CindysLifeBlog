<?php
    // usersOnly for future purposes
    function usersOnly($redirect = '/blog.php') {
        if(empty($_SESSION['id'])) {
            $_SESSION['message'] = 'Please login first';
            $_SESSION['type'] = 'error';

            header('location: ' . URLROOT . $redirect);
            exit(0);
        }
    }

    function adminOnly($redirect = '/blog.php') {
        if(empty($_SESSION['id']) || empty($_SESSION['admin'])) {
            $_SESSION['message'] = 'You are not authorized!';
            $_SESSION['type'] = 'error';

            header('location: ' . URLROOT . $redirect);
            exit(0);
        }
    }

    function guestsOnly($redirect = '/blog.php') {
        if(isset($_SESSION['id'])) {
            header('location: ' . URLROOT . $redirect);
            exit(0);
        }
    }