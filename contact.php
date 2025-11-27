<?php
include "posts.php";
include "functions.php";
include "header.php";
?>

<h2>Kontaktujte nás</h2>



<form method="POST">
    <label>Jméno:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Zpráva:</label>
    <textarea name="message" required></textarea>

    <button type="submit">Odeslat</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    printFormData($_POST);
}
?>


<?php include "footer.php"; ?>
