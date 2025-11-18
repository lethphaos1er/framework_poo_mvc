<h2>Recent Books</h2>
<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <?php echo $book['title']; ?>
        </li>
    <?php endforeach; ?>
    <li></li>
</ul>