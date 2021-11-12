<?php
	//declare(encoding='UTF-8');
		if ($_SERVER['SERVER_NAME']=='localhost') {
				$host = 'localhost';
				$user = 'root';
				$pwd = 'root';
				$db = 'gpcahdb';
		}else{

			//quando estiver hospedado
		}
	$conn=mysqli_connect($host, $user, $pwd) or
	die ('Não conseguiu fazer a conexão com o servidor');

	mysqli_select_db($conn, $db);


// mysqli_query("SET NAMES 'utf8'");
// mysqli_query('SET character_set_connection=utf8');
// mysqli_query('SET character_set_client=utf8');
// mysqli_query('SET character_set_results=utf8');

?>