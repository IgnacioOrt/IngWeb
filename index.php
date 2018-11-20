<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uel Uelik</title>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

                <!--
                    <div id="captioned-gallery">
                        <div class="arrows prev"></div>

                        <figure class="slider">
                            <figure>
                                <img src="img/inicio1.jpg" >
                                <figcaption>Oops, Tiré la Tarta de Limón - Massimo Bottura (ITA) </figcaption>
                            </figure>
                            <figure>
                                <img src="img/inicio2.jpg" alt>
                                <figcaption>Chile en Nogada (MEX) </figcaption>
                            </figure>
                            <figure>
                                <img src="img/inicio3.png" alt>
                                <figcaption>Mi Cosecha - Dan Barber (USA) </figcaption>
                            </figure>
                             <figure>
                                <img src="img/inicio4.png" alt>
                                <figcaption>Siete Fuegos - Francis Mallmann (ARG)</figcaption>
                            </figure>
                            <figure>
                                <img src="img/inicio5.png" alt>
                                <figcaption>Siete Fuegos - Francis Mallmann (ARG)</figcaption>
                            </figure>
                            <figure>
                                <img src="img/inicio6.png" alt>
                                <figcaption>Siete Fuegos - Francis Mallmann (ARG)</figcaption>
                            </figure>
                            </figure>
                            <div class="arrows next"></div>
                        </div> -->


    

<div class="w3-content" style="max-width:1200px">
    <div id="captioned-gallery">
            <figure class="slider">
       
                <figure>
                    <img class="mySlides" src="img/inicio1.jpg" style="width:100%">
                    <figcaption>Oops, Tiré la Tarta de Limón - Massimo Bottura (ITA) </figcaption>
                </figure>

                <figure>
                    <img class="mySlides" src="img/inicio2.jpg" style="width:100%">
                    <figcaption>Chile en Nogada (MEX) </figcaption>
                </figure>

                <figure>
                    <img class="mySlides" src="img/inicio3.jpg" style="width:100%">
                    <figcaption>Mi Cosecha - Dan Barber (USA) </figcaption>
                </figure>

                <figure>
                    <img class="mySlides" src="img/inicio4.png" style="width:100%">
                    <figcaption>Siete Fuegos - Francis Mallmann (ARG) </figcaption>
                </figure>
            </figure>
    </div>

                    <div class="w3-row-padding w3-section">
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="img/inicio1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                        </div>
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="img/inicio2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                        </div>
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="img/inicio3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                        </div>
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="img/inicio4.png" style="width:100%;cursor:pointer" onclick="currentDiv(4)">
                        </div>
                    </div>
</div>



	<script src="dist/jquery/jquery.slim.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/popper/umd/popper.min.js"></script>

    <script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>