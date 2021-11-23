<?php
//$server = "serverName\instanceName";
$server = "10.231.45.205";
$username ="debo";
$password ="debo";
$database ="DOSSA_08112021";

$connectionInfo = array("Database"=>$database, "UID"=>$username, "PWD"=>$password);

//$connectionInfo = array( "Database"=>"DOSSA_08112021", "UID"=>"debo", "PWD"=>"debo");
$conn = sqlsrv_connect( $server, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}


?>
