<?php

namespace App\Models;

class Book extends \Core\Model{ // avec ça il va récupérer ce qui lui est utile dans le dossier pour fonctionner
    public $isbn,$title, $resume, $cover,
    $author_id, $category_id;
    // Liaisons
    protected $author, $category;

   //ici viennent les setter mis dans \Core\Model
}