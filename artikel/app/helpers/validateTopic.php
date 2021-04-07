<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Kategori diperlukan');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);

    if ($existingTopic) {
        array_push($errors, 'Kategori sudah digunakan');
    }
    return $errors;
}