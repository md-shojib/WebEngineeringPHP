<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-lg">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	     <?php
	     		$booksJson = file_get_contents('book.json');
		       $users = json_decode($booksJson);
	     		$message="hello";
			 if(isset($message))
			 {
			 ?>
		<table class="border" style="margin:10px; width: 70rem;">
			<tbody>
				<tr>
					<th class="border">Id</th>
					<th class="border">Title</th>
					<th class="border">Author</th>
					<th class="border">Availbel</th>
					<th class="border">pages</th>
					<th class="border">isbn</th>
				</tr>
				<?php $i=0; foreach ($users as $user) { $i++; ?>
					
				<tr>
					<td class="border"> <?= $i;?> </td>
					<td class="border"> <?= $user->title; ?> </td>
					<td class="border"> <?= $user->author; ?> </td>
					<td class="border"> <?= $user->available; ?> </td>
					<td class="border"> <?= $user->pages; ?> </td>
					<td class="border"> <?= $user->isbn; ?> </td>
				</tr>
				<?php }
			 }
			 else
				echo $message;
			 ?>
    </tbody>
</table>
		<form action="newbook.php" method="post">
			<input type="submit" value="Add New Book"/>
		</form>
	</div>
  </body>
</html>
