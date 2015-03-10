<?php
		$server="localhost";
		$user="multimh2_tysnusr";
		$pass="Tyson4pp2015";
		$database="multimh2_tysonapp";

		$mysqli=new mysqli($server, $user, $pass, $database);
		
		$sql ="SELECT * FROM  `categorias`";
		$result = $mysqli->query($sql);

		if(!$result){
    		die('There was an error running the query [' . $mysqli->error . ']');
		}

		$rawdata = array();
		while($row = $result->fetch_array(MYSQLI_ASSOC))
    	{
       		$rawdata[$i] = $row;
       	 	$i++;
    	}
    	
    	$mysqli->close(); //desconectamos la base de datos
 		
 		echo json_encode($rawdata);

?>