<?php

require_once "posts.php";
require_once "functions.php";


require_once "header.php";
?>

<h2>Přehled příspěvků</h2>

<?php foreach ($posts as $post): ?>
    <article>
        <h3><?php echo $post["title"]; ?></h3>

        <p>
            <?php echo excerpt($post["content"], 150); ?>
        </p>

        <a href="post.php?id=<?php echo $post["id"]; ?>">
            Číst více
        </a>
    </article>
<?php endforeach; ?>

<?php

require_once "footer.php";
?>
