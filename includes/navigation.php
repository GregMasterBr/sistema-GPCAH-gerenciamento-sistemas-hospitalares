 <?php
//abrindo a sessão 
session_start();
$name = explode(" ",$_SESSION["usuario"][2]);
?>
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">GPCAH</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src=<?php echo "'". $_SESSION["usuario"][3]."'" ;?> class="user-image" alt="Custom Image" ></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Configurações</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Ajustes</a></li>
						<li class="divider"></li>
						<li class="m_2"><a  href="/logout.php"><i class="fa fa-lock"></i> Sair</a></li>	
	        		</ul>
	      		</li>
			</ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users nav_icon"></i>Usuários<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="consultar-usuarios.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tags nav_icon"></i>Fornecedores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cadastrar-fornecedores.php">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="consultar-fornecedores.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                        <li>
                            <a href="#"><i class="fa fa-plus-square nav_icon"></i>Especialidade<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cadastrar-especialidade.php">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="consultar-especialidade.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                          
                        <li>
                            <a href="#"><i class="fa fa-exchange nav_icon"></i>Equipamentos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cadastrar-equipamento.php">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="consultar-equipamento.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>     
                        <li>
                            <a href="#"><i class="fa fa-gift nav_icon"></i>Tipo de Equipamentos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cadastrar-tipoequipo.php">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="consultar-tipoequipo.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>         
                        <li>
                            <a href="#"><i class="fa fa-phone nav_icon"></i>Fabricante<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cadastrar-fabricante.php">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="consultar-fabricante.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>     
                        <li>
                            <a href="#"><i class="fa fa-bookmark nav_icon"></i>Departamentos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cadastrar-depto.php">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="consultar-depto.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                                                                                                                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>