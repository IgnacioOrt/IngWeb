<?php
	session_start();
	if ( !empty($_POST["ingrediente"]) && is_array($_POST["ingrediente"]) ) { 
    echo "<ul>";
    foreach ( $_POST["ingrediente"] as $ingrediente ) { 
            echo "<li>";
            echo $ingrediente; 
            echo "</li>"; 
     }
     echo "</ul>";
}
?>