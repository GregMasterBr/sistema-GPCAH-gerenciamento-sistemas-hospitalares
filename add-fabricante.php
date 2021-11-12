<?php
session_start();
include ('includes/connection.php');

$addEsp = "INSERT INTO fabricante(fabricante, responsavel,contato,observacao) 
                        VALUES   ('".$_POST['fabricante']."',
                        		  '".$_POST['responsavel']."',
                        		  '".$_POST['contato']."',
                                  '".$_POST['descricao']."')";


	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $addEsp)) {
    echo "New record created successfully";
    header("Location:consultar-fabricante.php");
} else {
    echo "Error: " . $addEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-fabricante.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


