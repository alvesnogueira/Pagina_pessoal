<?php
$servidor = 'localhost';
$banco      = 'about_israel';
$usuario  = 'root';
$senha    = '';
$link     = mysql_connect($servidor, $usuario, $senha) or die("erro ao conectar ao banco de dados!");
$db          = mysql_select_db($banco,$link);

if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}
?>