<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/acordeon_style.css"/>
	</head>
	<body>
<?php



		$root_path = "img/";
		$ruta = array();
		$ruta[0]= $root_path . "alba_crema.jpg";
		$ruta[1]= $root_path . "club_colombia.jpg";
		$ruta[2]=$root_path . "sauvignon_harlan.jpg";

		$nombre = array();
		$nombre[0] = "Espirtuosos";
		$nombre[1] = "Cervezas";
		$nombre[2] = "Vinos";

		echo'	<div class="accordian">
			<ul>';	


		for ($i=0; $i<count($ruta); $i++){
			echo'
				<li>
					<div class="image_title">
						<a href="#">'.$nombre[$i].'</a>
					</div>
					<a href="#">
						<img src = "'.$ruta[$i].'"/>
					</a>
				</li>';
		}
		echo'	</ul>
		</div>';



/*
	try{	
		require_once __DIR__ . "/db.php";
		$state = $conn->prepare("SELECT * FROM licor WHERE grados_alcohol >= 15");
	   	$state->execute();
		$state->setFetchMode(PDO::FETCH_ASSOC);
		echo'	<div class="accordian">
			<ul>';		
		while($var = $state->fetch()){
		echo'
				<li>
					<div class="image_title">
						<a href="#">'.$var["nombre"].'</a>
					</div>
					<a href="#">
						<img src = "'.$var["imagen"].'"/>
					</a>
				</li>';
		}
		echo'	</ul>
		</div>';
					$var = $state->fetch();
	
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}
*/
?>
	</body>
</html>
