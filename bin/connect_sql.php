<?
$servidor_sql = "localhost";
$user_sql 	  = "root";
$pass_sql	  ="root";
$db_name	  ="freelibrary";

mysql_connect($servidor_sql, $user_sql, $pass_sql)or die("Error al conectar a la base de datos");
mysql_select_db($db_name);

function quitar($str)
{
	$no_permitidos = array("'", "\"", "\\", "OR", "SELECT", "*", "FROM", "=", "<", ">");
	return str_replace($no_permitidos, "", $str);
}


?>