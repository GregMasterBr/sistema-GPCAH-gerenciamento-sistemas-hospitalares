<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
  session_start();
  include ('includes/connection.php');

    $queryEstado='SELECT * FROM estados order by sigla';

    //echo $queryConsumers;
    mysqli_select_db($conn, $db); 
    
     $resultEstado = mysqli_query($conn, $queryEstado);
     $nregistrosEstado = mysqli_num_rows($resultEstado);

     $queryEspecialidade='SELECT * FROM especialidade_fornecedor';

    //echo $queryConsumers;
    mysqli_select_db($conn, $db); 
    
     $resultEspecialidade = mysqli_query($conn, $queryEspecialidade);
     $nregistrosEspecialidade = mysqli_num_rows($resultEspecialidade);
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
        	<h1>Cadastrar Fornecedores</h1>
  				<div class="panel-body">
					<form role="form" class="form-horizontal" action="add-fornecedores.php" method="post" name="frmCadAnalista" enctype="multipart/form-data">

						<div class="form-group">
							<label class="col-md-2 control-label">Empresa</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-suitcase"></i>
									</span>
									<input type="text" class="form-control1" placeholder="Razão Social/Nome Fantasia" id="empresa" name="empresa" />
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
									<input type="text" class="form-control1" id="cnpj" name="cnpj" placeholder="CNPJ" />
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
									<input  class="form-control1" type="text" placeholder="Inscrição Municipal" id="imunicipal" name="imunicipal" />
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
									<input type="text" class="form-control1" placeholder="Inscrição Estadual" id="iestadual" name="iestadual" />
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
     										echo'<option value="'.$rowsEsp['id'].'">';
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
								    <input class="form-control1" type="text" placeholder="Contato/Responsável" id="contato" name="contato">
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
									<input type="email" class="form-control1" placeholder="E-mail" id="email" name="email" />
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
								    <input id="telefone" name="telefone" class="form-control1" type="text" placeholder="Telefone/Celular" />
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
								    <input id="cep" name="cep" class="form-control1" type="text" placeholder="CEP" />
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
								    <input  class="form-control1" type="text" placeholder="Endereço" id="endereco" name="endereco" />
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
								    <input class="form-control1" type="text" placeholder="Número" id="numero" name="numero" />
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
								    <input class="form-control1" type="text" placeholder="Complemento" id="complemento" name="complemento" />
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
								    <input  class="form-control1" type="text" placeholder="Bairro" id="bairro" name="bairro" />
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
								    <input class="form-control1" type="text" placeholder="Cidade" id="cidade" name="cidade" />
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
								    <textarea placeholder="Observação" id="obs" name="obs" cols="50" rows="10" class="form-control1" ></textarea>
								</div>
							</div>
						</div>
						
						<div class="box-footer">
                      		<button type="submit" class="btn  btn-block" style="background-color: rgb(6, 217, 149);color: #fff;">Cadastrar</button>
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
