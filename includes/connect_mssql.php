<?php
$host ="localhost"; 
$username ="sa";
$password ="lps";
$database ="DEBO_HEAD";

$ms_link=sqlsrv_connect($host, $username, $password);
//$ms_db=mssql_select_db($database);

/*
? mssql_pconnect($this->hostname, $this->username, $this->password)
: mssql_connect($this->hostname, $this->username, $this->password);
*/

?>
