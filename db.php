<?php
	try{
		$conn = new PDO("mysql:host=licoresudea-fundamentos.rhcloud.com;dbname=licoresudea","admin7mfjFFt","cfMjq7gekFl-");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}

?>
