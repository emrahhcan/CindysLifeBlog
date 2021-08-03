<?php
    include(APPROOT . '/app/database/db.php');
    include(APPROOT . '/app/helpers/userValidation.php');
    include(APPROOT . '/app/helpers/sessionHelper.php');

    $table = 'users';

    $adminUsers = selectAll($table);

    $errors = array();
    $username = '';
    $email = '';
    $password = '';
    $confirmPassword = '';
    $table = 'users';

    if(isset($_POST['register-btn']) || isset($_POST['create-admin'])) {
        $errors = userValidation($_POST);

        if(count($errors) === 0) {
            unset($_POST['register-btn'], $_POST['confirmPassword'], $_POST['create-admin']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if(isset($_POST['admin'])) {
                $_POST['admin'] = 1;
                $user_id = create($table, $_POST);

                $_SESSION['message'] = 'User has been created successfully';
                $_SESSION['type'] = 'success';
                
                header('location: ' . URLROOT . '/admin/users/index.php');
                exit();
            } else {
                $_POST['admin'] = 0;
                $user_id = create($table, $_POST);
                $user = selectOne($table, ['id' => $user_id]);

                sessionHelper($user);
            }
        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
        }
    }

    if(isset($_POST['login-btn'])) {
        $errors = loginValidation($_POST);

        if(count($errors) === 0) {
            $user = selectOne($table, ['username' => $_POST['username']]);

            if($user && password_verify($_POST['password'], $user['password'])) {
                sessionHelper($user);
            } else {
                array_push($errors, 'Wrong Crendtials');
            }
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    if(isset($_GET['delete_id'])) {
        $count = delete($table, $_GET['delete_id']);

        $_SESSION['message'] = 'User has been deleted succesfully';
        $_SESSION['type'] = 'success';

        header('location: ' . URLROOT . '/admin/users/index.php');
        exit();
    }