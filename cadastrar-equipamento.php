<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
  session_start();
  include ('includes/connection.php');

  // Tipo de Equipamento
      $queryTipo='SELECT * FROM tipo_equipamento';
	  mysqli_select_db($conn, $db); 
      $resultTipo = mysqli_query($conn, $queryTipo);

  // Fabricante
    $queryFabricante='SELECT * FROM fabricante';
    mysqli_select_db($conn, $db); 
    $resultFabricante = mysqli_query($conn, $queryFabricante);
  
  // Fornecedor
    $queryFornecedor='SELECT * FROM fornecedores';
    mysqli_select_db($conn, $db); 
    $resultFornecedor = mysqli_query($conn, $queryFornecedor);
  
    // Departamento
    $queryDepartamento='SELECT * FROM departamento';
    mysqli_select_db($conn, $db); 
    $resultDepartamento = mysqli_query($conn, $queryDepartamento);


?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Plataforma :: Equipamento - GPCAH</title>
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
        	<h1>Cadastrar Equipamento</h1>
  				<div class="panel-body">
					<form role="form" class="form-horizontal" action="add-equipamento.php" method="post" name="frmEquipamento" enctype="multipart/form-data">

						<div class="form-group">
							<label class="col-md-2 control-label">Nome Técnico</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-suitcase"></i>
									</span>
									<input type="text" class="form-control1" placeholder="Nome técnico" id="tecnico" name="tecnico" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Nome Comercial</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" id="comercial" name="comercial" placeholder="Nome comercial" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Tipo de equipamento</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-plus-square"></i>
									</span>
   										<select id='tipoequipo' name='tipoequipo' class="form-control1">
   											<option value="0">Selecione...</option>
   										<?php 	
   											while ($rowTipo = mysqli_fetch_array($resultTipo)){
     										echo'<option value="'.$rowTipo['id'].'">';
     											echo utf8_encode($rowTipo['tipo']);
     										echo '</option>';
     										}
     									?>	
     									</select>
								</div>
							</div>
						</div>								
						<div class="form-group">
							<label class="col-md-2 control-label">Marca</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input  class="form-control1" type="text" placeholder="Marca" id="marca" name="marca" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Modelo</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-book"></i>
									</span>
									<input type="text" class="form-control1" placeholder="Modelo" id="modelo" name="modelo" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Número do patrimômnio</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-exchange"></i>
									</span>
								    <input class="form-control1" type="text" placeholder="Número do patrimômniol" id="patrimomnio" name="patrimomnio">
								</div>
							</div>
						</div>				
						<div class="form-group">
							<label class="col-md-2 control-label">Localização</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										@
									</span>
									<input type="text" class="form-control1" placeholder="Localização" id="localizacao" name="localizacao" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Fabricante</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-plus-square"></i>
									</span>
   										<select id='fabricante' name='fabricante' class="form-control1">
   											<option value="0">Selecione...</option>
   										<?php 	
   											while ($rowsFabricante = mysqli_fetch_array($resultFabricante)){
     										echo'<option value="'.$rowsFabricante['id'].'">';
     											echo utf8_encode($rowsFabricante['fabricante']);
     										echo '</option>';
     										}
     									?>	
     									</select>
								</div>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-2 control-label">Fornecedor</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-plus-square"></i>
									</span>
   										<select id='fornecedor' name='fornecedor' class="form-control1">
   											<option value="0">Selecione...</option>
   										<?php 	
   											while ($rowsFornecedor = mysqli_fetch_array($resultFornecedor)){
     										echo'<option value="'.$rowsFornecedor['id'].'">';
     											echo utf8_encode($rowsFornecedor['empresa']);
     										echo '</option>';
     										}
     									?>	
     									</select>
								</div>
							</div>
						</div>				
						<div class="form-group">
							<label class="col-md-2 control-label">Proprietário</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										@
									</span>
									<input type="text" class="form-control1" placeholder="Proprietário" id="proprietario" name="proprietario" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label">Departamento</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-plus-square"></i>
									</span>
   										<select id='departamento' name='departamento' class="form-control1">
   											<option value="0">Selecione...</option>
   										<?php 	
   											while ($rowsDepartamento = mysqli_fetch_array($resultDepartamento)){
     										echo'<option value="'.$rowsDepartamento['id'].'">';
     											echo utf8_encode($rowsDepartamento['departamento']);
     										echo '</option>';
     										}
     									?>	
     									</select>
								</div>
							</div>
						</div>			
						<div class="form-group">
							<label class="col-md-2 control-label">Valor de compra</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										@
									</span>
									<input type="text" class="form-control1" placeholder="Valor de compra" id="valor" name="valor" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-8">
								<span>FORMATO: MÊS/DIA/ANO</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Data de Aquisição</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
										<input type="date" name="aquisicao" id="aquisicao" min="2000-01-01">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Data de Instalação</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
										<input type="date" name="instalacao" id="instalacao" min="2000-01-01">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Data de Garantia</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-phone"></i>
									</span>
										<input type="date" name="garantia" id="garantia" min="2000-01-01">
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

						<div class="form-group">
							<label class="col-md-2 control-label">Ficha Técnica</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-info"></i>
									</span>
									<input type="file" name="ficha" id="ficha" accept="application/pdf" class="form-control1" />
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
