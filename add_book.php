<?php 
require_once 'db.php';
// var_dump($connect);
// var_dump($_POST);

// $title = mysqli_real_escape_string($connect, $_POST['category']);
// $author = mysqli_real_escape_string($connect, $_POST['author']);
// $category = mysqli_real_escape_string($connect, $_POST['booktitle']);
$title = $_POST['booktitle'];
$author = $_POST['author'];
$category = $_POST['category'];
$result = mysqli_query($connect, "INSERT INTO books (title, author, category, adddate, available) VALUES ('$title', '$author', '$category', CURDATE(), TRUE);");
header('location: index.php')
?>