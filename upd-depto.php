<?php
session_start();
include ('includes/connection.php');


$UpdEsp = "UPDATE departamento SET departamento='".$_POST['departamento']."',responsavel='".$_POST['responsavel']."', contato='".$_POST['contato']."' ,observacao='".$_POST['descricao']."' WHERE id=". $_POST['idDepartamento'];

//echo $UpdEsp;

	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $UpdEsp)) {
    echo "record UPDATED successfully";
    header("Location:consultar-depto.php");
} else {
    echo "Error: " . $UpdEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-depto.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


