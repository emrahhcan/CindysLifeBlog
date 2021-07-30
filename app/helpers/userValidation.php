<?php
    function userValidation($user) {
        $existingUser = selectOne('users', ['email' => $user['email']]);
        
        $nameValidation = "/^[a-zA-Z0-9]*$/";
        $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
        
        $errors = array();

        if(empty($user['username'])) {
            array_push($errors, 'Username is required!');
        } elseif(!preg_match($nameValidation, $user['username'])) {
            array_push($errors, 'Name can only contain letters and numbers!');
        }

        if(empty($user['email'])) {
            array_push($errors, 'Email is required!');
        } elseif($existingUser) {
            array_push($errors, 'Email is already exist!');
        }

        if(empty($user['password'])) {
            array_push($errors, 'Password is required!');
        }

        if(strlen($user['password']) <= 6) {
            array_push($errors, 'Password must be at least 6 characters!');
        } elseif(preg_match($passwordValidation, $user['password'])) {
            array_push($errors, 'Password must contain at least 1 number!');
        }

        if($user['confirmPassword'] !== $user['password']) {
            array_push($errors, 'Passwords do not match!');
        }

        return $errors;
    }

    function loginValidation($user) {
        $errors = array();

        if(empty($user['username'])) {
            array_push($errors, 'Username is required!');
        }
        
        if(empty($user['password'])) {
            array_push($errors, 'Password is required!');
        }

        return $errors;
    }