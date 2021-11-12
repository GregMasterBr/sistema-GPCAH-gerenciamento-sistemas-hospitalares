<?php
session_start();
include ('includes/connection.php');

$addFornecedores = "INSERT INTO fornecedores(empresa, cnpj,cep, endereco,numero,complemento,bairro,cidade,uf,telefone,inscricao_municipal,incriscao_estadual,contato,email,especialidade,observacao) 
                        VALUES   ('".$_POST['empresa']."',
                                  '".$_POST['cnpj']."',
                                  '".$_POST['cep']."',
                                  '".$_POST['endereco']."',
                                  '".$_POST['numero']."',
                                  '".$_POST['complemento']."',
                                  '".$_POST['bairro']."',
                                  '".$_POST['cidade']."',
                                  '".$_POST['estado']."',
                                  '".$_POST['telefone']."',
                                  '".$_POST['inscricao_municipal']."',
                                  '".$_POST['incriscao_estadual']."',
                                  '".$_POST['contato']."',
                                  '".$_POST['email']."',
                                  '".$_POST['especialidade']."',
                                  '".$_POST['obs']."')";


	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $addFornecedores)) {
    echo "New record created successfully";
    header("Location:consultar-fornecedores.php");
} else {
    echo "Error: " . $addFornecedores . "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-forncedores.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>


