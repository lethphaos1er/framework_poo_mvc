<?php

namespace App\Models;

use \PDO, Core\DB;
abstract class CategoriesRepository{
public static function findAll(PDO $conn): array
{
    $sql = "SELECT *
            FROM categories
            ORDER BY name";
    $rs = DB::getConnection()->query($sql);
    return $rs->fetchAll(PDO::FETCH_CLASS, category::class);
}
}