<?php
	try{
		$conn = new PDO("mysql:host=localhost;dbname=db_empresa","adminnLE36ed","7Z3m7IgHP-An");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
	}catch(PDOException $pdoe){
		echo $pdoe->getMessage();
	}

?>
