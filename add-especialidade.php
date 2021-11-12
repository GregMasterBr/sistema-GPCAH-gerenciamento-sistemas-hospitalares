<?php
session_start();
include ('includes/connection.php');

$addEsp = "INSERT INTO especialidade_fornecedor(especialidade, descricao) 
                        VALUES   ('".$_POST['especialidade']."',
                                  '".$_POST['descricao']."')";


	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $addEsp)) {
    echo "New record created successfully";
    header("Location:consultar-especialidade.php");
} else {
    echo "Error: " . $addEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-especialidade.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


