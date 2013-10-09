<?php

$pagina = isset($_GET['pg']) ? $_GET['pg'] : "";

switch ($pagina) {
	
	case 'curriculo':
		include 'curriculo.php';
		break;
	case 'hobbies':
		include 'hobbies.php';
	break;
	case 'donwlaods':
		include 'donwlaods.php';
		break;
	case 'links':
		include 'linkks.php';
		break;	
	default:
		include("home.php");
		break;
}
