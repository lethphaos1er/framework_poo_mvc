<?php

namespace App\Models;

class Book extends \Core\Model{ // avec ça il va récupérer ce qui lui est utile dans le dossier pour fonctionner
    public $isbn,$title, $resume, $cover,
    $author_id, $category_id;
    // Liaisons
    protected $author, $category;

   //ici viennent les setter mis dans \Core\Model
}
// echo $book->title; // pour afficher le titre d'un livre

// echo $book->author->>firstname; // pour afficher le prénom de l'auteur du livre

//foreach $author->books (1-n à l'envers)

//foreach $book ->tags (n-m)

//foreach $tag->books (n-m à l'envers)