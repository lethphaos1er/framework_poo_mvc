<?php

namespace App\Controllers;

use \PDO;

abstract class PagesController{
    public static function homeAction(PDO $conn)
{
    // inclure le modèle
   
    $books = \App\Models\BooksModel::findAll($conn, 3);

    global $content, $title;

    ob_start();

    // inclure la vue
    include __DIR__ . '/../../views/pages/home.php';

    $content = ob_get_clean();
}
};