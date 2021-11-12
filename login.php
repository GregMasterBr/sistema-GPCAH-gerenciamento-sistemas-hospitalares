<?php
//abrindo a sessão 
session_start();
$_session["path"]=str_replace("login.php","",$_SERVER['PHP_SELF']);
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" name="LoginForm" method="post">
        <h2 class="form-signin-heading text-center">ENTRAR</h2>
        <label for="user" class="sr-only">Usuário</label>
        <input type="text" class="form-control"  required autofocus  id="user" placeholder="Usuário" name="usuario">
        <label for="senha" class="sr-only">Senha</label>
        <input type="password"  class="form-control" id="senha" placeholder="Senha" name="senha" required">

        <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
<?php 
        include ('includes/connection.php');

            $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
            $senha = isset($_POST["senha"])?$_POST["senha"]:"";
      
            $where="WHERE username= '".$usuario."' and password='".$senha."'";
            $consulta = "Select * from users ".$where;

        $result = mysqli_query($conn, $consulta);
        //echo $consulta;

        mysqli_select_db($conn, $db);
        if (!$result) {
            die(mysqli_error($conn));
        }else{
            //write all
        }

          $nregistros = mysqli_num_rows($result);
        
          if(strlen($usuario)>2){
              if( $nregistros==1){
                $registro = mysqli_fetch_assoc($result);

                if($registro['status']!='A'){
                  echo "<script>  alert('Usuário inativo no sistema.');   </script>"; 
                }else{
                   if($registro['access_level']=='O'){//ADMIN
                      $_SESSION["usuario"] =array($registro['username'], $registro['access_level'], $registro['name'],$registro['path_img'],$registro['id'] );
                    echo "<script> document.location.href='index.php';</script>";  
                   }else{//USUÁRIO COMUM
                      echo "<script>  alert('Usuário COMUM no sistema.');   </script>"; 
                   }
                  
                }
              }else{
                    echo "<script>  alert('Usuário e Senha não cadastrado no sistema.');   </script>";    
              }
          }
         
        
    ?>  
</html>
