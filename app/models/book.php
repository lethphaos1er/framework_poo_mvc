<?php

namespace App\Models;

class Book{
    public $id, $isbn,$title, $resume, $cover,
    $created_at, $author_id, $category_id;
    // Liaisons
    private $author, $category;

    public function __get(string $prop): mixed
    {
        // 1.si le setter existe
             $setterName= "set" . ucfirst($prop); //$setterName= setXxxx
             if(method_exists($this, $setterName)):
                $this->$setterName(); //
                return $this->$prop; //retourne le mots demander
             endif;
             return true;
    }
    public function setAuthor()
    {
        if($this->author): //($this->author==null)
        $this->author = AuthorsRepository::findOneById($this->author_id);
        endif;
    }
    public function setCategory()
    {
        if($this->category):
        $this->category = CategoriesRepository::findOneById($this->category_id);
        endif;
    }
}