<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Kategori diperlukan');
    }

    $existingPost = selectOne('topics', ['name' => $post['name']]);

    if ($existingPost) {
        if (isset($post['update-topic']) && $existingPost['id']!=$post['id']) {
            array_push($errors, 'Kategori tersebut sudah ada');
        }
        
        if (isset($post['add-topic'])) {
            array_push($errors, 'Kategori tersebut sudah ada');
        }
    }
    return $errors;
}