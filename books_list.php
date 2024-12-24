<?php
require_once 'db.php';
$result = mysqli_query($connect, "select * from books");
// $assoc = mysqli_fetch_assoc($result);
// var_dump($assoc);
// echo $length;
// fetch_assoc
$twodim = $result->fetch_all();
// var_dump($twodim);
$i = 0;
$dim = $twodim[$i];
$length = count($twodim);
while ($dim) {
    $title = $dim[0];
    $author = $dim[1];
    $category = $dim[2];
    $adddate = $dim[3];
    $available = $dim[4];
    
    // Display the information in a styled table
    echo '<div class="book-info">';
    echo '<p><strong>Title:</strong> ' . $title . '</p>';
    echo '<p><strong>Author:</strong> ' . $author . '</p>';
    echo '<p><strong>Category:</strong> ' . $category . '</p>';
    echo '<p><strong>Added Date:</strong> ' . $adddate . '</p>';
    echo '<p><strong>Available:</strong> ' . $available . '</p>';
    echo '</div>';
    if ($i < $length - 1)
    {
        $i++;
    }
    else
    {
        break;
    }
    $dim = $twodim[$i];
}

//fetch all returns result in form of a two dimensional array


//fetch_row gives row by row you access columns by indexes
// while ($assoc)
// {
//     $title = $assoc[0];
//     $author = $assoc[1];
//     $category = $assoc[2];
//     $adddate = $assoc[3];
//     $available = $assoc[4];

//     echo $title, $author, $category, $adddate, $available;
//     echo '<br>';
//     $assoc = mysqli_fetch_row($result);
// }

// mysqli fetch_array returns result in form of an array with the choice of accessing data with associations or
// indexes;
//fetch_array
// $assoc = mysqli_fetch_array($result);
// while ($assoc)
// {
//         $title = $assoc['title'];
//     $author = $assoc['author'];
//     $category = $assoc['category'];
//     $adddate = $assoc['adddate'];
//     $available = $assoc['available'];
//     // $title = $assoc[0];
//     // $author = $assoc[1];
//     // $category = $assoc[2];
//     // $adddate = $assoc[3];
//     // $available = $assoc[4];

//     echo $title, $author, $category, $adddate, $available;
//     echo '<br>';
//     $assoc = mysqli_fetch_array($result);
   
// }


//fetch_assoc returns output in form of an associative array
// while ($assoc)
// {
//     $title = $assoc['title'];
//     $author = $assoc['author'];
//     $category = $assoc['category'];
//     $adddate = $assoc['adddate'];
//     $available = $assoc['available'];

//     echo $title, $author, $category, $adddate, $available;
//     echo '<br>';
//     $assoc = mysqli_fetch_assoc($result);
// }
// var_dump($assoc);
?>
