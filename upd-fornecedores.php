<?php
session_start();
include ('includes/connection.php');


$UpdFornec = "UPDATE fornecedores SET 
				empresa='".$_POST['empresa']."'
				, cnpj='".$_POST['cnpj']."'
				, cep='".$_POST['cep']."'
				, endereco='".$_POST['endereco']."'
				, numero='".$_POST['numero']."'
				, complemento='".$_POST['complemento']."'
				, bairro='".$_POST['bairro']."'
				, cidade='".$_POST['cidade']."'
				, uf='".$_POST['estado']."'
				, telefone='".$_POST['telefone']."'
				, inscricao_municipal='".$_POST['imunicipal']."'
				, incriscao_estadual='".$_POST['iestadual']."'
				, contato='".$_POST['contato']."'
				, email='".$_POST['email']."'
				, especialidade='".$_POST['especialidade']."'
			    , observacao='".$_POST['obs']."'
				
 WHERE id=". $_POST['idFornecedores'];

//echo $UpdEsp;

	mysqli_select_db($conn, $db);

 if (mysqli_query($conn, $UpdFornec)) {
    echo "record UPDATED successfully";
    header("Location:consultar-fornecedores.php");
} else {
    echo "Error: " . $UpdFornec. "<br>" . mysqli_error($conn);
    echo "<br><h3><a href='cadastrar-fornecedores.php' >Voltar para o cadastro</a></h3>";
}

mysqli_close($conn);

?>
