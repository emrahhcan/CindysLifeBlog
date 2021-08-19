<?php
    function contactValidation() {
        $errors = array();

        if(empty($contactName)) {
            array_push($errors, 'Name is required!');
        }
        if(empty($contactEmail)) {
            array_push($errors, 'Email is required!');
        }
        if(empty($contactMessage)) {
            array_push($errors, 'Message is required!');
        }

        return $errors;
    }