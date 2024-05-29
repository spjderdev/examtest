<?php

Include_Once 'Controllers/BooksController.php';
$Controller = new BooksController();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
switch ($action) {
    case 'index':
        $Controller->Home();
        break;
    default:
        echo "action not found";
        break;
}

$Controller->GetAllBooks();