<?php
//$server = "serverName\instanceName";
$server = "localhost";
$username ="sa";
$password ="XxZza.2021!";
$database ="DEBO_HEAD";

$connectionInfo = array("Database"=>$database, "UID"=>$username, "PWD"=>$password);

//$connectionInfo = array( "Database"=>"DOSSA_08112021", "UID"=>"debo", "PWD"=>"debo");
$conn = sqlsrv_connect( $server, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}


?>
