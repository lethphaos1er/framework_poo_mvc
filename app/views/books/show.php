<h2><?php echo $book->title; ?></h2>
<div>
    <?php echo $book->resume;?>
</div>

<ul>
    <li>Author: <?php echo $book->author->firstname; ?>
                <?php echo $book->author->lastname; ?>
</li>
    <li>ISBN: <?php echo $book->isbn; ?></li>
</ul>