<?php
    session_start();
    if (!isset($_SESSION['id_usuario'])) {
        header("Location:index.php");
    }
?>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uel Uelik</title>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Top menu -->
	<nav class="navbar navbar-dark fixed-top navbar-expand-md navbar-no-bg">
    	<div class="container">
	        <a class="navbar-brand" href="index.php">UEL UELIK</a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
        	</button>
        	<div class="collapse navbar-collapse" id="navbarNav">
	            <ul class="navbar-nav">
                	<li class="nav-item">
	                    <a class="nav-link scroll-link" href="consulta.php">Consulta de receta</a>
                	</li>
                	<li class="nav-item">
	                    <a class="nav-link scroll-link" href="noticias.php">Noticias</a>
                	</li>
	                <li class="nav-item">
                    	<a class="nav-link scroll-link" href="acerca.php">Acerca de</a>
                	</li>
                	<li class="nav-item">
                        <a class="nav-link scroll-link" href="crearReceta.php">Crear receta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="editarReceta.php">Editar receta</a>
                    </li>
            	</ul>

<!--https://bootsnipp.com/snippets/featured/fancy-navbar-login-sign-in-form-->
            	
            	<span class="ml-auto navbar-nav">
            		<li class="nav-item dropdown">
            			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            				<?php echo ($_SESSION['username']); ?>
            			</a>
            			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="login-dp-2">
            				<div class="row">
            					<div class="col-md-12">
            						<a class="enlacesDrop" href="perfil.php">Mi perfil</a><br>
                                    <a class="enlacesDrop" href="cerrarsesion.php">Cerrar sesión</a>
            					</div>
            				</div>
            			</div>
            		</li>
            	</span>
            	<!-- <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Already have an account?</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Iniciar sesión
								<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
    										<div class="form-group">
    											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
    											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
    										</div>
    										<div class="form-group">
    											 <label class="sr-only" for="exampleInputPassword2">Password</label>
    											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
    										</div>
    										<div class="form-group">
    											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    										</div>
    								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul> -->
        	</div>
    	</div>
	</nav>

    <div class="container registro">
        <div class="row"><?php 
            require_once 'config.php';
            require_once 'conexion.php';
            //$id_receta = $_GET['id_receta'];
/*            <a href="eliminarProximoEvento.php?id_evento=<?php echo "$id_evento" ?>" class="waves-effect" onclick="return confirm('¿Esta seguro que desea eliminar?');"><i class="fa fa-times fa-fw" aria-hidden="true"></i><span class="hide-menu">Eliminar</span></a></td>
*/
            $id_receta = 6;
            $base = new dbmysqli($hostname,$username,$password,$database);
            $query="SELECT* FROM receta WHERE id_receta = '$id_receta'";
            $result = $base->ExecuteQuery($query);
            if($result){
                if ($row=$base->GetRows($result)){
                    $nombre = $row[2];
                    $descripcion = $row[3];
                    $comentario = $row[4];
                }
                $base->SetFreeResult($result);
            }else{
                echo "<h3>Error generando la consulta</h3>";
            }
            $query="SELECT* FROM ingrediente WHERE id_receta = '$id_receta'";
            $result = $base->ExecuteQuery($query);
            if($result){
                while ($row=$base->GetRows($result)){
                    $ingredientes[] = $row[2];
                    $cantidades[] = $row[3];
                }
                $base->SetFreeResult($result);
            }else{
                echo "<h3>Error generando la consulta</h3>";
            }
            $base -> CloseConnection();
            
            ?>
            <div class="col-md-12">
                <h3><?php echo "$nombre"; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo "$comentario"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Ingredientes</h4>
                <ul>
                    <?php
                        for ($i=0; $i < count($ingredientes); $i++) { 
                            ?><li><?php echo ($cantidades[$i]." de ".$ingredientes[$i]) ?> </li><?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Preparación</h4>
                <p><?php echo "$descripcion"; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>

	<script src="dist/jquery/jquery.slim.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/popper/umd/popper.min.js"></script>
</body>
</html>