<?php

namespace App\Controllers\PostsController;

use \PDO;

// Demande de données au modèle
include_once '../app/models/postsModel.php';
$posts = \App\Models\PostsModel\findAll($connexion);

// Charger la vue 'home'
function homeAction (PDO $connexion) {
    global $content, $title, $posts;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}