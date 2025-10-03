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

function showAction (PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $post = \App\Models\PostsModel\findOneById($connexion, $id);
    global $content, $title;
    $title = "Alex Parker - ".$post['title'];
    ob_start();
    include '../app/views/pages/show.php';
    $content = ob_get_clean();
}

function addFormAction(PDO $connexion) {
    include_once '../app/models/categoriesModel.php';
    $categories = \App\Models\CategoriesModel\findAll($connexion);
    global $content, $title;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/pages/addForm.php';
    $content = ob_get_clean();
}

function addInsertAction(PDO $connexion, array $data) {
    include_once '../app/models/postsModel.php';
    $id = \App\Models\PostsModel\insertOne($connexion, $data);
    header('location: /exam/EXAM_SRV_25_26/public/');
    
}

function deleteAction(PDO $connexion, int $id) {
    include_once '../app/models/postsModel.php';
    $return = \App\Models\PostsModel\deleteOneById($connexion, $id);
    header('location: /exam/EXAM_SRV_25_26/public/');
}