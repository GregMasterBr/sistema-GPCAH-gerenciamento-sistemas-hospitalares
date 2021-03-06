<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
  session_start();
  include ('includes/connection.php');

    $queryEquips='SELECT *,d.departamento,f.fabricante,s.empresa, t.tipo FROM equipamento e 
					inner join departamento as d on e.departamento=d.id
					inner join fabricante as f on e.fabricante=f.id
					inner join fornecedores as s on e.fornecedor=s.id
					inner join tipo_equipamento as t on e.tipo=t.id 
				order by e.created_at desc';

    //echo $queryConsumers;
    mysqli_select_db($conn, $db); 
    
     $result = mysqli_query($conn, $queryEquips);
     $nregistros = mysqli_num_rows($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Plataforma :: Fornecedores - GPCAH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        	<h1>Consultar Equipamento</h1>
    		<div class="content_bottom">
 				    <div class="col-md-12">
					   <div class="bs-example1" data-example-id="contextual-table">
					    <table class="table">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>Equipamento</th>
					          <th>Fabricante</th>
					          <th>Fornecedor</th>
					          <th>Depto</th>
					          <th>Instala????o</th>
					          <th>Ficha T??c</th>
					          <th>Gerenciar</th>
					        </tr>
					      </thead>
			              <tfoot>
			               <tr>
			               		<td colspan="7" >Equipamentos encontrados: <?php echo $nregistros;  ?> </td>    
			                </tr>
			              </tfoot>					      
					      <tbody>
			               <?php
			                  for ($i=0; $i<$nregistros; $i++){
			                    $registro = mysqli_fetch_assoc($result);
                          	     $cadastro ='editar-equipamento.php?id='.$registro['id'];


			                      echo'<tr>';
			                          echo'<td class="text-capitalize" id='.$registro['id'].'>'.($i+1) .'</td>';
			                          echo'<td class="text-capitalize">'.($registro['nome_comercial']).'</td>';
			                          echo'<td >'.$registro['fabricante'].'</td>';
		                          	  echo'<td >'.$registro['empresa'].'</td>';
			                          echo'<td >'.$registro['departamento'].'</td>';
			                          echo'<td class="text-capitalize">'.date("d/m/Y - H:i:s", strtotime($registro['dt_instalacao'])).'</td>';		                          			
			                          echo'<td ><a href="'.$registro['ficha_tecnica'].'" target="_blank">Ficha</td>';                            	  
                          			echo'<td ><a  href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a> <a  href="#">Movimenta????o</a></td>';
			                      echo '</tr>';    
			                  }
                			?>     		       
					      </tbody>
					    </table>
					   </div>
	 				</div>
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
