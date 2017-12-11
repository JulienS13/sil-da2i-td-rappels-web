<?php
function initDbConnection() {
    
    $mysqli = new mysqli('localhost', 'root', '', 'tdweb');
   
    /* Modification du jeu de résultats en utf8 */
    if (!$mysqli->set_charset("utf8")) {
        printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $mysqli->error);
        exit();
    }
    return $mysqli;
}



function getBlock($file, $data = [])
{
	$db = initDbConnection();
    if ($db->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
    } else {
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                switch ($key) {
                	case 'movie':
                	
                		$result = mysqli_query($db, "SELECT * FROM movie where id = $value");
	                    $data['movie'] = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];

	                    $result = mysqli_query($db, "SELECT path, legend FROM picture JOIN moviehaspicture ON picture.id = moviehaspicture.id_picture WHERE role='poster' AND idMovie = " . $data['movie']['id']);
	                    $data['moviePicture'] = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
                        
    	                $result = mysqli_query($db, "SELECT * FROM picture JOIN moviehaspicture ON picture.id = moviehaspicture.idPicture WHERE role='poster' AND idMovie = " . $data['movie']['id']);
        	            $data['poster'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    
            	        $result = mysqli_query($db, "SELECT path, legend FROM picture JOIN personhaspicture ON picture.id = personhaspicture.idPicture JOIN moviehasperson ON personhaspicture.idPerson = moviehasperson.idPerson JOIN movie ON moviehasperson.idMovie = movie.id WHERE movie.id = " . $data['movie']['id'] . " AND moviehasperson.role = 'director'");
            	        $data['director'] = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
                    
                	    $result = mysqli_query($db, "SELECT path, legend FROM picture JOIN personhaspicture ON picture.id = personhaspicture.idPicture JOIN moviehaspicture ON moviehaspicture.idPerson = personhaspicture.idPerson JOIN movie ON moviehasperson.idMovie = movie.id WHERE movie.id = " . $data['movie']['id'] . " AND moviehasperson.role <> 'actor'");
                   	    $data['actorInMoviePicture'] = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
                        break;


                    case 'person':
                        
                        $result = mysqli_query($db, "SELECT * FROM person JOIN personhaspicture ON person.id = personhaspicture.idPerson JOIN picture ON personhaspicture.idPicture = picture.id WHERE person.id = $value");
                        $data['person'] = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
                        
                        $result = mysqli_query($db, "SELECT * FROM picture JOIN personhaspicture ON personhaspicture.idPicture = picture.id where idPerson = $value");
                        $data['actor'] = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
                        
                        $result = mysqli_query($db, "SELECT * FROM picture JOIN personhaspicture ON personhaspicture.idPicture = picture.id where idPerson = $value");
                        $data['director'] = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
                        break;
                    
                    case 'movieList':
                    
                        $result = mysqli_query($db, "SELECT * FROM movie ORDER BY titre ASC");
                        $data['movieList'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        break;
                    
                    case 'directorList':
                        $result = mysqli_query($db, "SELECT * FROM person JOIN moviehasperson ON person.id = moviehasperson.idPerson WHERE role like 'director' ORDER BY nom ASC");
                        $data['directorList'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        break;
                    
                    case 'actorList':
                        $result = mysqli_query($db, "SELECT * FROM person JOIN moviehasperson ON person.id = moviehasperson.idPerson WHERE role like 'actor' ORDER BY nom ASC");
                        $data['actorList'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        break;
                }
            }
        }
    }
    include $file;
}
?> 