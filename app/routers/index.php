<?php

// ROUTER PRINCIPAL

// Détails d'un post
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';

// Route par défaut
// PATTERN : /
// CTRL : postsController
// Action : homeAction
else :

    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\homeAction($connexion);

endif;