<?php
$host ="10.231.45.205"; 
$username ="debo";
$password ="debo";
$database ="DOSSA_08112021";

$ms_link=sqlsrv_connect($host, $username, $password);
$ms_db=sqlsrv_select_db($database);

/*
? mssql_pconnect($this->hostname, $this->username, $this->password)
: mssql_connect($this->hostname, $this->username, $this->password);
*/

?>
