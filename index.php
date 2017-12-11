<?php
require_once('function.php');
$data = array();
?>

<!doctype html>
<html lang="en"> 
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/main.css">
	</head>


	<body>
		<main>
       <!--  <?php getBlock("includes/header.php");?> -->
        <div class="row">
            <article>
               <!--  <?php getBlock('movieList.php', ['movieList' => '']);?>
                <?php getBlock('directorList.php', ['directorList' => '']);?> -->
                <?php getBlock('actorList.php', ['actorList' => '']);?>
            </article>
        </div>
      <!--   <?php getBlock("includes/footer.php"); ?> -->
    </main>
</body>
</html>