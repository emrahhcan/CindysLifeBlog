<?php
    include(APPROOT . '/app/helpers/contactValidation.php');
    $errors = array();

    if(isset($_POST['submit'])) {
        $errors = contactValidation();

        $contactName = $_POST['name'];
        $contactEmail = $_POST['email'];
        $contactMessage = $_POST['message'];
        
        if(!empty($contactName) && !empty($contactEmail) && !empty($contactMessage)) {
            $mailTo = 'contact@cindyslife.net';
            $headers = 'From: ' . $contactEmail;
            $txt = 'You have received an email from ' . $contactName . ' --> ' . $contactMessage;

            $mail = mail($mailTo, $subject, $txt, $headers);
            header('location: index.php');
        } else {
            array_push($errors, 'An error occurs');
        }
    }