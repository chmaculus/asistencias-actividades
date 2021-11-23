<?php
include("../includes/connect_mssql.php");
$sql = "SELECT NOM FROM clientes ";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $row['NOM']."<br />";
}

sqlsrv_free_stmt( $stmt);
?>
