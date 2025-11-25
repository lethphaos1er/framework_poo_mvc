<!-- ASIDE CATEGORIES -->
<aside class="space-y-4">
    <?php 
    $categories = App\Models\CategoriesRepository::findAll();
    include '../app/views/categoris/_index.php' ?>
</aside>
