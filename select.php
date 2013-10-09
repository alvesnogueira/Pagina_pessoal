<?php
require("conect.php");

$SQL = "SELECT * FROM contatos";
$RS  = mysql_query($SQL);
while($RF = mysql_fetch_array($RS))
{
    
    var_dump($RF);
    
}

?>

