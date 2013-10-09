<?php
$menu = isset($_GET['pg'])? $_GET['pg'] :"";
switch ($men) {
	case 'contato':
		include 'contato.php'
		break;
	case 'portifolio':
		include 'portifolio.php'
		break;
	case 'posts':
		include('posts.php')
		break;
	case 'vida':
		include('vida.php')
		break;
	case 'sobre':
		include('home.php')
		break;
	
	default:
		include('index.php');
		break;
}
?>