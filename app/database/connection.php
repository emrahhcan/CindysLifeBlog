<?php
    $db_host = 'localhost';
    $db_user = 'local';
    $db_pass = '123';
    $db_name = 'blog_system';

    $conn = new MySQLi($db_host, $db_user, $db_pass, $db_name);

    if($conn->connect_error) {
        die('Connection has failed: ' . $conn->connect_error);
    }