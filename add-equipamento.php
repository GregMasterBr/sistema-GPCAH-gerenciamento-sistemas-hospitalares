<?php

session_start();
include ('includes/connection.php');
include ('includes/access-code-generate.php');

$srcfile="equipamentos/".$_FILES['ficha']['name'];

$uploaddir = 'equipamentos/';
$uploadfile = $uploaddir . basename($_FILES['ficha']['name']);

//echo '<pre>';
if (move_uploaded_file($_FILES['ficha']['tmp_name'], $uploadfile)) {
    //echo "Arquivo válido e enviado com sucesso.\n";
} else {
    //echo "Possível ataque de upload de arquivo!\n";
}

$code=geraSenha(10, true, true, false).geraSenha(10, true, true, false);

$addEsp = "INSERT INTO equipamento(nome_tecnico, nome_comercial,tipo, marca, modelo,code, num_patrimonio,fabricante,fornecedor,dt_aquisicao,dt_instalacao,dt_garantia,proprietario,departamento,localizacao,valor_compra,ficha_tecnica,observacao) 
                        VALUES   ('".$_POST['tecnico']."',
                        		  '".$_POST['comercial']."',
                        		  '".$_POST['tipoequipo']."',
                        		  '".$_POST['marca']."',
                        		  '".$_POST['modelo']."',
                        		  '".$code."',
                        		  '".$_POST['patrimomnio']."',  
                        		  '".$_POST['fabricante']."',
                        		  '".$_POST['fornecedor']."',
                        		  '".$_POST['aquisicao']."',
                        		  '".$_POST['instalacao']."',
                        		  '".$_POST['garantia']."',
                        		  '".$_POST['proprietario']."',    
                        		  '".$_POST['departamento']."',
                        		  '".$_POST['localizacao']."',
                        		  '".$_POST['valor']."',  
                                  '".$srcfile."',              		     
                                  '".$_POST['descricao']."')";


	mysqli_select_db($conn, $db);

//echo $addEsp ;

 if (mysqli_query($conn, $addEsp)) {
    echo "New record created successfully";
    header("Location:consultar-equipamento.php");
} else {
    echo "Error: " . $addEsp . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-equipamento.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>
