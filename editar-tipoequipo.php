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
      echo "<script>javascript:window.location='consultar-tipoequipo.php';</script>";
    }  

    $consulta = "SELECT * FROM tipo_equipamento WHERE id=".$id;
    
      mysqli_select_db($conn, $db);
      $result = mysqli_query($conn, $consulta);
      $nregistros = mysqli_num_rows($result);
   // echo $consulta;  
      if ($nregistros!=1) {
        echo "<script>alert('Lamento mas não foram encontrados resultados para esta definição de palavra.\ Você será redirecionado para a lista das palavras.');</script>";
        echo "<script>javascript:window.location='consultar-tipoequipo.php';</script>";

      } else {
          $registro = mysqli_fetch_assoc($result); //var_dump($registro);
      }    
      
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Plataforma :: Tipo de Equipamentos - GPCAH</title>
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
        	<h1>Editar Tipos de Equipamentos</h1>
  				<div class="panel-body">
					<form role="form" class="form-horizontal" action="upd-tipoequipo.php" method="post" name="frmEquipo" enctype="multipart/form-data">
            <input type="hidden" id="idEquipo" name="idEquipo"  value="<?php echo ($registro["id"]); ?>" />
						<div class="form-group">
							<label class="col-md-2 control-label">Equipamentos</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-suitcase"></i>
									</span>
									<input type="text" class="form-control1" placeholder="Especialidade" id="tipo_equipamento" name="tipo_equipamento"  value="<?php echo utf8_encode($registro["tipo"]); ?>" />
								</div>
							</div>
						</div>
							<div class="form-group">
							<label class="col-md-2 control-label">Descrição</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-info"></i>
									</span>
								    <textarea placeholder="Descrição" id="descricao" name="descricao" cols="50" rows="10" class="form-control1"><?php echo utf8_encode($registro["descricao"]); ?></textarea>
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
