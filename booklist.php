<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>
<?php
$booksJson = file_get_contents('book.json');
$books = json_decode($booksJson, true);
echo "<pre>";
        print_r($books);
echo "</pre>";
?>
<form action="newbook.php" method="post">
        <input type="submit" value="Add New Book"/>
</form>
</body>
</html>