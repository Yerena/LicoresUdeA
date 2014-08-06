<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/acordeon_style.css"/>
	</head>
	<body>
<?php
	include 'header.php';
//	try{	
		$root_path = "img/vinos/";
		$ruta = array();
		$ruta[0]= $root_path . "sauvignon_harlan.jpg";
		$ruta[1]= $root_path . "diablo_cabernet.jpg";
		$ruta[2]=$root_path . "cabernet_merlot.jpg";
		$ruta[3]=$root_path . "vega_unico.jpg";
		$ruta[4]=$root_path . "pinot_noir_botella.jpg";

		$nombre = array();
		$nombre[0] = "Sauvignon Harlan";
		$nombre[1] = "Diablo Cabernet";
		$nombre[2] = "Cabernet Merlot";
		$nombre[3] = "Vega Unico";
		$nombre[4] = "Pinot Noir";

		echo'	<div class="accordian">
			<ul>';	
/*
		require_once __DIR__ . "/db.php";
		$state = $conn->prepare("SELECT * FROM licor WHERE (grados_alcohol >= 10 && grados_alcohol <= 20)");
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


<img src="camino hacia el archivo">