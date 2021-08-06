<?php
    include('../../path.php');
    include(APPROOT . '/app/database/db.php');
    include(APPROOT . '/app/helpers/middleware.php');

    if(isset($_FILES['upload']['name'])) {
        $file = $_FILES['upload']['tmp_name'];
        $fileName = $_FILES['upload']['name'];
        
        $fileNameArray = explode(".", $fileName);
        $extension = end($fileNameArray);
        $newImageName = rand() . '.' . $extension;
    
        chmod('upload', 0777);
    
        $allowedExtension = array("jpg", "JPG", "jpeg", "JPEG", "gif", "png");
    
        if(in_array($extension, $allowedExtension)) {
            move_uploaded_file($file, '../../assets/img/postBodyImages/' . $newImageName);
                
            $functionNumber = $_GET['CKEditorFuncNum'];
            $url = URLROOT . '/assets/img/postBodyImages/' . $newImageName;
            $message = '';
    
                echo "<script type='text/javascript'>
                window.parent.CKEDITOR.tools.callFunction($functionNumber, '$url', '$message');
            </script>";
        }
    }