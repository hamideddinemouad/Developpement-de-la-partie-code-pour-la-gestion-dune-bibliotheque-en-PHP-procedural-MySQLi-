<?php
require_once("books_list.php");
?>
<link rel="stylesheet" href="style.css">
<form action="add_book.php" method="post">

    <label for="booktitle">booktitle:</label>
    <input type="text" id="booktitle" name="booktitle">

    <label for="author">author</label>
    <input type="text" id="author" name="author">

    <label for="category">category</label>
    <input type="text" name="category" id="category">

    <button type="submit"> add book</button>
</form>