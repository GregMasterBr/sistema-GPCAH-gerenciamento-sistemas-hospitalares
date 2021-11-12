<?php
session_start();
include ('includes/connection.php');


$UpdEsp = "UPDATE fabricante SET fabricante='".$_POST['fabricante']."',responsavel='".$_POST['responsavel']."', contato='".$_POST['contato']."' ,observacao='".$_POST['descricao']."' WHERE id=". $_POST['idFabricante'];

//echo $UpdEsp;

	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $UpdEsp)) {
    echo "record UPDATED successfully";
    header("Location:consultar-fabricante.php");
} else {
    echo "Error: " . $UpdEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-fabricante.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


