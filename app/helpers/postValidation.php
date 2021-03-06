<?php
    function postValidation($post) {
        $errors = array();

        if(empty($post['title'])) {
            array_push($errors, 'Title is required!');
        }

        if(empty($post['body'])) {
            array_push($errors, 'Body is required!');
        }

        if(empty($post['tag_id'])) {
            array_push($errors, 'Please choose a tag');
        }

        $existPost = selectOne('posts', ['title' => $post['title']]);

        if($existPost) {
            if(isset($post['update-post']) && $existPost['id'] != $post['id']) {
                array_push($errors, 'Post with this title is already exist!');
            }

            if(isset($post['add-post'])) {
                array_push($errors, 'Post with this title is already exist!');
            }
        }

        return $errors;
    }