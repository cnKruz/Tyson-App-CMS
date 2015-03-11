<?php


		$server="localhost";
		$user="multimh2_tysnusr";
		$pass="Tyson4pp2015";
		$database="multimh2_tysonapp";

		$mysqli=new mysqli($server, $user, $pass, $database);
		$mysqli->query("SET NAMES utf8");

		$sql ="SELECT * FROM  `productos`";
		
		if(strcmp($_REQUEST["peticion"], "categoria")==0){
			$sql.="WHERE categoria='".$_REQUEST["categoria"]."'";  
		}
		//else if (strcmp($_REQUEST["peticion"], "categoria")==0) {
			
		//}

		$result = $mysqli->query($sql);

		if(!$result){
    		die('There was an error running the query [' . $mysqli->error . ']');
		}

		$rawdata = array();
		while($row = $result->fetch_array(MYSQLI_ASSOC))
    	{
       		$rawdata[] = $row;
       	 	//$i++;
    	}
    	
    	$mysqli->close(); //desconectamos la base de datos
 		
 		//var_dump($rawdata);
 		echo json_encode($rawdata);
?>