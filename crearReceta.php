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

     <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 150%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("img/LeChocolat-DominiqueCrenn.png"); }
.img2 { background-image: url("img/ArrozNegroYLechedeNueces-AlexAtala.png"); }
.img3 { background-image: url("img/CaminataEnElBosque-DominiqueCrenn.png"); }
.img4 { background-image: url("img/MoleMadre-EnriqueOlvera.png"); }


/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 1500px;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>
	<!-- Top menu -->
	<nav class="navbar navbar-dark fixed-top navbar-expand-md navbar-no-bg">
    	<div class="container">
	        <a class="navbar-brand" href="indexU.php">UEL UELIK</a>
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

    <div class="bg-image img1">
    <div class="container registro">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center;">Agrega tu receta</h2>
            </div>
        </div>
        <div class="row ingredientes">
            <div class="col-md-12">
                <form method="POST" action="validaReceta.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la receta</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"placeholder="Nombre" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="ing1">Ingrediente</label>
                                    <input type="text" class="form-control" name="ingrediente[]" id="ing1"placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="ing1">Gramaje</label>
                                    <input type="text" class="form-control" name="gramaje[]" id="ing1" placeholder="Gramaje">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="ing1">Unidad</label>
                                    <select class='custom-select' name='unidad[]' required>
                                        <option value=''>Seleccione una unidad</option>
                                        <option value='Pizca'>Pizca</option>
                                        <option value='Pieza'>Pieza</option>
                                        <option value='Cucharada'>Cucharada</option>
                                        <option value='Onza'>Onza</option>
                                        <option value='Taza'>Taza</option>
                                        <option value='Litro'>Litro</option>
                                        <option value='Gramos'>Gramos</option>
                                        <option value='Libras'>Libras</option>
                                        <option value='Kilo'>Kilo</option>
                                        <option value='Al gusto'>Al gusto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label class="quitar-ingrediente">Quitar ingrediente</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                <input type="text" class="form-control" name="ingrediente[]" placeholder="Nombre" required>
                            </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                <input type="text" class="form-control" name="gramaje[]" placeholder="Gramaje">
                            </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select class='custom-select' name='unidad[]' required>
                                        <option value=''>Seleccione una unidad</option>
                                        <option value='Pizca'>Pizca</option>
                                        <option value='Pieza'>Pieza</option>
                                        <option value='Cucharada'>Cucharada</option>
                                        <option value='Onza'>Onza</option>
                                        <option value='Taza'>Taza</option>
                                        <option value='Litro'>Litro</option>
                                        <option value='Gramos'>Gramos</option>
                                        <option value='Libras'>Libras</option>
                                        <option value='Kilo'>Kilo</option>
                                        <option value='Al gusto'>Al gusto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                <input type="text" class="form-control" name="ingrediente[]" placeholder="Nombre" required>
                            </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                <input type="text" class="form-control" name="gramaje[]" placeholder="Gramaje">
                            </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select class='custom-select' name='unidad[]' required>
                                        <option value=''>Seleccione una unidad</option>
                                        <option value='Pizca'>Pizca</option>
                                        <option value='Pieza'>Pieza</option>
                                        <option value='Cucharada'>Cucharada</option>
                                        <option value='Onza'>Onza</option>
                                        <option value='Taza'>Taza</option>
                                        <option value='Litro'>Litro</option>
                                        <option value='Gramos'>Gramos</option>
                                        <option value='Libras'>Libras</option>
                                        <option value='Kilo'>Kilo</option>
                                        <option value='Paquete'>Paquete</option>
                                        <option value='Al gusto'>Al gusto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="demo"></div>
                        <button class="btn" onclick="agregar()">+</button> Añadir ingrediente<br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="comment">Preparación</label>
                                    <textarea class="form-control" rows="5" name="preparacion" id="comment" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="comment">Comentario</label>
                                    <textarea class="form-control" rows="5" name="comment" id="comment" required></textarea>
                                </div>
                            </div>
                        </div>
                    <br><button type="submit" class="btn btn-primary">Añadir receta</button>
                </form>
            </div>
        </div>
    </div>
    </div>
	<script src="dist/jquery/jquery.slim.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/popper/umd/popper.min.js"></script>
    <script type="text/javascript">
        var num_ingredientes = 0;
        function agregar() {
            num_ingredientes = num_ingredientes + 1;
            if (num_ingredientes > 0) {
                for (var i = 1; i < num_ingredientes; i++) {
                    console.log(document.getElementById("demo"));
                }
            }
            var ingrediente = "<div class='row' id='"+num_ingredientes+"'><div class='col-sm-4'><div class='form-group'><input type='text' class='form-control' name='ingrediente[]' placeholder='Nombre' required></div></div>";
            var gramaje = "<div class='col-sm-3'><div class='form-group'><input type='text' class='form-control' name='gramaje[]' placeholder='Gramaje' required></div></div>";
            var unidad = "<div class='col-sm-3'><div class='form-group'><select class='custom-select' name='unidad[]' required><option value=''>Seleccione una unidad</option><option value='Pizca'>Pizca</option><option value='Pieza'>Pieza</option><option value='Cucharada'>Cucharada</option><option value='Onza'>Onza</option><option value='Taza'>Taza</option><option value='Litro'>Litro</option><option value='Gramos'>Gramos</option><option value='Libras'>Libras</option><option value='Libras'>Libras</option><option value='Kilo'>Kilo</option><option value='Al gusto'>Al gusto</option></select></div></div>";
            var eliminar = "<div class='col-sm-2 text-center'><button class='btn' onclick='eliminarIngrediente("+num_ingredientes+")'>x</button></div>";

                            
            //console.log(ingrediente + "" + gramaje + "" + unidad + eliminar);
            document.getElementById("demo").innerHTML += ingrediente + "" + gramaje + "" + unidad + "" + eliminar;
        }

        function eliminarIngrediente(id) {
            document.getElementById(id).remove();
            num_ingredientes--;
        }
    </script>
</body>
</html>