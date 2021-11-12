<?php
session_start();
include ('includes/connection.php');


$UpdEsp = "UPDATE tipo_equipamento SET tipo='".$_POST['tipo_equipamento']."', descricao='".$_POST['descricao']."' WHERE id=". $_POST['idEquipo'];

//echo $UpdEsp;

	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $UpdEsp)) {
    echo "record UPDATED successfully";
    header("Location:consultar-tipoequipo.php");
} else {
    echo "Error: " . $UpdEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-tipoequipo.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


