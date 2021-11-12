<?php
session_start();
include ('includes/connection.php');


$UpdEsp = "UPDATE especialidade_fornecedor SET especialidade='".$_POST['especialidade']."', descricao='".$_POST['descricao']."' WHERE id=". $_POST['idEspecialidade'];

//echo $UpdEsp;

	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $UpdEsp)) {
    echo "record UPDATED successfully";
    header("Location:consultar-especialidade.php");
} else {
    echo "Error: " . $UpdEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-especialidade.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


