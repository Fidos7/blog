<?php
include "posts.php";
include "functions.php";
include "header.php";

if (!isset($_GET["id"])) {
    echo "<p>Chyba: nebylo zadáno ID.</p>";
    include "footer.php";
    exit;
}

$id = (int)$_GET["id"];
$post = getPostById($posts, $id);

if (!$post) {
    echo "<p>Příspěvek nenalezen.</p>";
    include "footer.php";
    exit;
}
?>

<article>
    <h2><?php echo $post["title"]; ?></h2>
    <p><?php echo nl2br($post["content"]); ?></p>
</article>

<a class="back" href="index.php">Zpět</a>

<?php include "footer.php"; ?>

