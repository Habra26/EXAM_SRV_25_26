<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion): array {
    $sql = "SELECT *
            FROM posts AS p
            LEFT JOIN categories AS c ON c.id = p.category_id
            ORDER BY p.created_at DESC
            LIMIT 10;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}