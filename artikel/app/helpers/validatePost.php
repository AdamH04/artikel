<?php

function validatePost($post)
{
    $errors = array();



    if (empty($post['title'])) {
        array_push($errors, 'Judul artikel diperlukan');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Isi artikel diperlukan');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Pilih kategori');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);

    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id']!=$post['id']) {
            array_push($errors, 'Artikel dengan judul tersebut sudah ada');
        }
        
        if (isset($post['add-post'])) {
            array_push($errors, 'Artikel dengan judul tersebut sudah ada');
        }
    }
    return $errors;
}