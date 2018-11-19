<?php
	session_start();
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	require_once 'config.php';
	require_once 'conexion.php';
	$base = new dbmysqli($hostname,$username,$password,$database);
	$usuariobuscar = array("correo","$mail");
	$query="SELECT* FROM usuario WHERE correo = '$mail'";
	$result = $base->ExecuteQuery($query);
	if($result){
		if ($row=$base->GetRows($result)){
			echo "El usario esta registrado\n<br>";
			if (md5($pass) == $row[4]) {
				$_SESSION['username']=$row[2];
				$_SESSION['id_usuario']=$row[0];
				echo ("<br>".$_SESSION['username']);
				echo ("<br>".$_SESSION['id_usuario']);
				echo "Las contraseñas coinciden";
				header("Location:indexU.php");
			}else{
				echo "Contrseña incorrecta";
				header("Location:indexerror.php");
			}
		}
		$base->SetFreeResult($result);
	}else{
		echo "<h3>Error generando la consulta</h3>";
	}
?>