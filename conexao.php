<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
<?php
$con = @mysql_connect("localhost", "root", "root") or die("Não foi possível conectar com o servidor de dados!");
mysql_select_db("horarioescolar", $con) or die("Banco de dados não localizado!");

mysql_set_charset('UTF8', $con);
?>