<?php
$serverName = "192.168.11.29"; //serverName\instanceName
$connectionInfo = array( "Database"=>"HSP", "UID"=>"userhsp", "PWD"=>"hsp432@");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>