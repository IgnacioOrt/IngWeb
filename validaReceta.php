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
	if ( !empty($_POST["gramaje"]) && is_array($_POST["gramaje"]) ) { 
    echo "<ul>";
    foreach ( $_POST["gramaje"] as $gramaje ) { 
            echo "<li>";
            echo $gramaje; 
            echo "</li>"; 
     }
     echo "</ul>";
	}
	if ( !empty($_POST["unidad"]) && is_array($_POST["unidad"]) ) { 
    echo "<ul>";
    foreach ( $_POST["unidad"] as $unidad ) { 
            echo "<li>";
            echo $unidad; 
            echo "</li>"; 
     }
     echo "</ul>";
	}
?>