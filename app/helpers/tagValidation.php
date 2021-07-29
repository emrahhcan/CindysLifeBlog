<?php
    function tagValidation($tag) {
        $errors = array();

        if(empty($tag['name'])) {
            array_push($errors, 'Name is required!');
        }

        $existTag = selectOne('tags', ['name' => $tag['name']]);

        if(isset($existTag)) {
            array_push($errors, 'This tag is already exist!');
        }

        return $errors;
    }