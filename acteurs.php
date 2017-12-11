
<?php require_once ('function.php');
if (!empty($_GET['personId'])) {
    $personId = (int)$_GET['personId'];
} else {
    header("HTTP/1.0 404 Not Found");
    echo '<h1>404 Not Found</h1>';
    die;
}
$data = array();
?>

<!doctype html>
<html lang="en"> 
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
			<title>Alien : Le huitième passager</title>

			<nav class="navbar navbar-default">
  				<div class="container-fluid">
   					<div class="navbar-header">
					    <a class="navbar-brand" href="#">Alien</a>
    				</div>
    				<ul class="nav navbar-nav">
    	  				<li><a href="index.html">Film</a></li>
      					<li><a href="realisateur.html">Réalisateur</a></li>
      					<li class="active"><a href="#">Acteurs</a></li>
	    			</ul>
  				</div>
			</nav>

			<?php getBlock("includes/infos_actors.php", ['person' => $personId]); ?>
		
	</body>

	<footer>Julien Sorelli</footer>
</html>