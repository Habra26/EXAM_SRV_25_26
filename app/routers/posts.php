<?php

use App\Controllers\PostsController;

include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
    break;

    case 'addForm':
        PostsController\addFormAction($connexion);
    break;

    case 'addInsert' :
        PostsController\addInsertAction($connexion, [
            'title' => $_POST['title'],
            'text' => $_POST['text'],
            'quote' => $_POST['quote'],
            'category_id' => $_POST['category_id']
        ]);
    break;

    case 'delete' : 
        PostsController\deleteAction($connexion, $_GET['id']);
    break;

    case 'editForm' :
        PostsController\editFormAction($connexion, $_GET['id']);
    break;

    case 'editUpdate' :
        PostsController\editUpdateAction($connexion, $_GET['id'], [
            'title' => $_POST['title'],
            'text' => $_POST['text'],
            'quote' => $_POST['quote'],
            'category_id' => $_POST['category_id']
        ]);
    break;

default :
        PostsController\homeAction($connexion);
    break;

endswitch;