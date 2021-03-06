<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uel Uelik</title>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>

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
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("img/LeChocolat-DominiqueCrenn.png"); }
.img2 { background-image: url("img_girl.jpg"); }
.img3 { background-image: url("img_lights.jpg"); }
.img4 { background-image: url("img_nature.jpg"); }
.img5 { background-image: url("img_forest.jpg"); }
.img6 { background-image: url("img_woods.jpg"); }

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
  width: 300px;
  padding: 20px;
  text-align: center;
}
</style>


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
                	
            	</ul>

<!--https://bootsnipp.com/snippets/featured/fancy-navbar-login-sign-in-form-->
            	
            	<span class="ml-auto navbar-nav">
            		<li class="nav-item dropdown">
            			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            				Iniciar sesión
            			</a>
            			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="login-dp">
            				<div class="row">
            					<div class="col-md-12">
            						<form class="form" role="form" method="post" action="validalogin.php" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="email">Correo electrónico</label>
											 <input type="email" class="form-control" name="mail" id="email" placeholder="Correo electrónico" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="pass">Contraseña</label>
											 <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Entrar</button>
										</div>
								 </form>
            					</div>
            				</div>
            				<div class="row">
            					<div class="col-md-12">
            						<div class="bottom text-center">
            							¿Aún no estas registrado? <a href="registro.php"><b>Registrarse</b></a>
            						</div>
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
    <br><br/>
    <br><br/>

    <h1 align="center" style="color:white;">¿Quiénes Somos?</h1>

    <!--<img alt="team" align="right" src="img/team.png" width="400" height="300" /> -->
    <p align="center" style="color: white;"> <br>Uel Uelik es un proyecto de cultura culinaria cargado de ilusión que crece dia a dia gracias a nuestros usuarios y visitantes. </p> <p align="center" style="color: white;">Uel Uelik obtiene su nombre a partir del idioma Náhuatl, teniendo como significado: "Demasiado Delicioso"</p>

    <div class="bg-image img1"></div>

    <footer>
       <a href="https://www.facebook.com/Uel-Uelik-766160330391350/?modal=admin_todo_tour" target="_blank"><center><img  alt="siguenos en facebook" align="middle" height="40" src="http://3.bp.blogspot.com/-MQuocq7OzfU/UiXwUY81yQI/AAAAAAAAB0Q/h6-R_R2-buI/s1600/face.png" title="siguenos en facebook" width="40" /></center></a>
   </footer>



    <script src="dist/jquery/jquery.slim.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/popper/umd/popper.min.js"></script>
</body>

</html>