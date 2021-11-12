<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
  session_start();
  include ('includes/connection.php');

    $id= isset($_GET["id"])?$_GET["id"]:0;

    if($_SESSION["usuario"][1]!="O" || $id==0 ){
      echo "<script>javascript:window.location='consultar-fornecedores.php';</script>";
    }  

    $consulta = "SELECT * FROM fornecedores WHERE id=".$id;
    
      mysqli_select_db($conn, $db);
      $result = mysqli_query($conn, $consulta);
      $nregistros = mysqli_num_rows($result);
   // echo $consulta;  
      if ($nregistros!=1) {
        echo "<script>alert('Lamento mas não foram encontrados resultados para esta definição de palavra.\ Você será redirecionado para a lista das palavras.');</script>";
        echo "<script>javascript:window.location='consultar-fornecedores.php';</script>";

      } else {
          $registro = mysqli_fetch_assoc($result); //var_dump($registro);
      }    



     $queryEspecialidade='SELECT * FROM especialidade_fornecedor';

    //echo $queryConsumers;
    mysqli_select_db($conn, $db); 
    
     $resultEspecialidade = mysqli_query($conn, $queryEspecialidade);
     
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Plataforma :: Fornecedores - GPCAH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
    <?php include 'includes/navigation.php'; ?>
    <div id="page-wrapper">
        <div class="graphs">
        	<h1>Editar Fornecedor -  <?php echo ($registro["empresa"]); ?></h1>
  				<div class="panel-body">
					<form role="form" class="form-horizontal" action="upd-fornecedores.php" method="post" name="frmCadAnalista" enctype="multipart/form-data">
            		<input type="hidden" id="idFornecedores" name="idFornecedores"  value="<?php echo (	$registro["id"]); ?>" />						
						<div class="form-group">
							<label class="col-md-2 control-label">Empresa</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-suitcase"></i>
									</span>
									<input type="text" class="form-control1" placeholder="Razão Social/Nome Fantasia" id="empresa" name="empresa" value="<?php echo utf8_encode($registro["empresa"]); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">CNPJ</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" id="cnpj" name="cnpj" placeholder="CNPJ" value="<?php echo ($registro["cnpj"]); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Inscrição Municipal</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input  class="form-control1" type="text" placeholder="Inscrição Municipal" id="imunicipal" name="imunicipal" value="<?php echo ($registro["inscricao_municipal"]); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Inscrição Estadual</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" placeholder="Inscrição Estadual" id="iestadual" name="iestadual" value="<?php echo ($registro["inscricao_estadual"]); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Especialidade</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-plus-square"></i>
									</span>
   										<select id='especialidade' name='especialidade' class="form-control1">
   											<option value="0">Selecione...</option>
   										<?php 	
   											while ($rowsEsp = mysqli_fetch_array($resultEspecialidade)){
   												if ($registro["especialidade"]==$rowsEsp['id']) {
   													$select="selected";
   												}else{
   													$select="";
   												}
     										echo'<option value="'.$rowsEsp['id'].'"'.$select.' >';
     											echo utf8_encode($rowsEsp['especialidade']);
     										echo '</option>';
     										}
     									?>	
     									</select>
								</div>
							</div>
						</div>						
						<div class="form-group">
							<label class="col-md-2 control-label">Contato</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-exchange"></i>
									</span>
								    <input class="form-control1" type="text" placeholder="Contato/Responsável" id="contato" name="contato" value="<?php echo utf8_encode($registro["contato"]); ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">E-mail</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										@
									</span>
									<input type="email" class="form-control1" placeholder="E-mail" id="email" name="email" value="<?php echo ($registro["email"]); ?>"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Telefone</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
								    <input id="telefone" name="telefone" class="form-control1" type="text" placeholder="Telefone/Celular" value="<?php echo ($registro["telefone"]); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">CEP</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
								    <input id="cep" name="cep" class="form-control1" type="text" placeholder="CEP"  value="<?php echo ($registro["cep"]); ?>"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Endereço</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
								    <input  class="form-control1" type="text" placeholder="Endereço" id="endereco" name="endereco" value="<?php echo utf8_encode($registro["endereco"]); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Número</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
								    <input class="form-control1" type="text" placeholder="Número" id="numero" name="numero" value="<?php echo ($registro["numero"]); ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Complemento</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
								    <input class="form-control1" type="text" placeholder="Complemento" id="complemento" name="complemento" value="<?php echo utf8_encode($registro["complemento"]); ?>"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Bairro</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
								    <input  class="form-control1" type="text" placeholder="Bairro" id="bairro" name="bairro" value="<?php echo utf8_encode($registro["bairro"]); ?>"/>
								</div>
							</div>
						</div>		
						<div class="form-group">
							<label class="col-md-2 control-label">Cidade</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
								    <input class="form-control1" type="text" placeholder="Cidade" id="cidade" name="cidade" value="<?php echo utf8_encode($registro["cidade"]); ?>"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">UF</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
   										<select id='estado' name='estado' class="form-control1">
   										<?php 	
   											while ($rows = mysqli_fetch_array($resultEstado)){
     										echo'<option value="'.$rows['sigla'].'">';
     											echo utf8_encode($rows['descricao']);
     										echo '</option>';
     										}
     									?>	
     									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Observação</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-info"></i>
									</span>
								    <textarea placeholder="Observação" id="obs" name="obs" cols="50" rows="10"><?php echo utf8_encode($registro["observacao"]); ?></textarea>
								</div>
							</div>
						</div>
						
						<div class="box-footer">
                      		<button type="submit" class="btn  btn-block" style="background-color: rgb(6, 217, 149);color: #fff;">Atualizar</button>
                    	</div>						

					</form>
	</div>               
    	</div>
    	  <div class="clearfix"> </div>
    	 <?php include 'includes/footer.php'; ?>
    </div>
    <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
