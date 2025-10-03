<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT
            p.*,                 
            c.name AS category  
            FROM posts AS p
            LEFT JOIN categories AS c ON c.id = p.category_id
            ORDER BY p.created_at DESC
            LIMIT 10;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById (PDO $connexion, int $id): array {
    $sql = "SELECT
            p.*,                
            c.name AS category  
            FROM posts p
            LEFT JOIN categories c ON c.id = p.category_id
            WHERE p.id = :id";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function insertOne($connexion, array $data):int {
    $sql = "INSERT INTO posts
            SET title = :title,
            text = :text,
            quote = :quote,
            category_id = :category_id,
            created_at = NOW();";
    $rs = $connexion->prepare($sql);
    $rs->bindValue('title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue('text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue('quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue('category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->execute();
    return $connexion->lastInsertId();
}