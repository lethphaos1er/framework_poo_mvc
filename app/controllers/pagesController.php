<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $conn)
{
    // inclure le modèle
    include_once __DIR__ . '/../models/booksModel.php';

    $books = \App\Models\BooksModel\findAll($conn, 3);

    global $content, $title;

    ob_start();

    // inclure la vue
    include __DIR__ . '/../../views/pages/home.php';

    $content = ob_get_clean();
}