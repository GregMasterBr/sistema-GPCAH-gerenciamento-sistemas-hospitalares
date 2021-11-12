<?php
session_start();
include ('includes/connection.php');

$addEsp = "INSERT INTO departamento(departamento, responsavel,contato,observacao) 
                        VALUES   ('".$_POST['departamento']."',
                        		  '".$_POST['responsavel']."',
                        		  '".$_POST['contato']."',
                                  '".$_POST['descricao']."')";


	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $addEsp)) {
    echo "New record created successfully";
    header("Location:consultar-depto.php");
} else {
    echo "Error: " . $addEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-depto.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


