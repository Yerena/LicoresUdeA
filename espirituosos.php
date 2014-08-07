<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/acordeon_style.css"/>
	</head>
	<body>
<?php
	include 'header.php';
	$root_path = "img/otros/";
		$ruta = array();
		$ruta[0]= $root_path . "alba_crema.jpg";
		$ruta[1]= $root_path . "baileys_cream.jpg";
		$ruta[2]=$root_path . "jose_cuervo.jpg";
		$ruta[3]=$root_path . "ginebra_jodphur.jpg";
		$ruta[4]=$root_path . "black_label.jpg";
		$ruta[5]=$root_path . "jack_daniels.jpg";
		$ruta[6]=$root_path . "absolut_pears.jpg";
		$ruta[7]=$root_path . "chivas_regal.jpg";
		$ruta[8]=$root_path . "ron_zacapa.jpg";

		$nombre = array();
		$nombre[0] = "Alba Crema";
		$nombre[1] = "Baileys Crema";
		$nombre[2] = "Jose Cuervo";
		$nombre[3] = "Ginebra Jodphur";
		$nombre[4] = "Black label";
		$nombre[5] = "Jack Daniels";
		$nombre[6] = "Absolut Pears";
		$nombre[7] = "Chivas Regal";
		$nombre[8] = "Ron Zacapa";

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
	/*try{	
		require_once __DIR__ . "/db.php";
		$state = $conn->prepare("SELECT * FROM licor WHERE (grados_alcohol > 20)");
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
