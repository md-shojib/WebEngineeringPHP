<?php
    $submitted = !empty($_POST);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bookstore</title>
    </head>
    <body>
        <?php
            $array = [
                [
                    'title' => $_POST['title'],
                    "author" => $_POST['author'],
                    "available" => $_POST['available'],
                    "pages"=>$_POST['pages'],
                    "isbn"=>$_POST['isbn']
                ]
           ];
       ?>
    <?php
        $booksJson = file_get_contents('book.json');
        $books = json_decode($booksJson, true);
    ?>
    <?php
        $newbooks= array_merge($books,$array);
        echo "<pre>";
                print_r($newbooks);
        echo "</pre>";
    ?>
    <?php
        $booksJson = json_encode($newbooks);
        file_put_contents('book.json', $booksJson);
    ?>
    </body>
</html>
