<?php

// ROUTER PRINCIPAL

// Route par défaut
// PATTERN : /
// CTRL : postsController
// Action : homeAction

include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\homeAction($connexion);