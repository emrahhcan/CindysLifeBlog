<?php
    function tagValidation($tag) {
        $errors = array();

        if(empty($tag['name'])) {
            array_push($errors, 'Name is required!');
        }

        $existTag = selectOne('tags', ['name' => $tag['name']]);

        if($existTag) {
            if(isset($post['update-tag']) && $existTag['id'] != $post['id']) {
                array_push($errors, 'This tag is already exist!');
            }

            if(isset($post['add-tag'])) {
                array_push($errors, 'This tag is already exist!');
            }
        }

        return $errors;
    }