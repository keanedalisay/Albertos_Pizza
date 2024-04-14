<?php

$host = "albpz_db";
$dbname = "albertos_database";
$username = "root";
$password = "123";

$mysqli = new mysqli(hostname: $host, 
                    username: $username, 
                    password: $password, 
                    database: $dbname);


if( $mysqli-> connect_errno ){
    die("Connection Error: " . $mysqli->connect_error);
}

return $mysqli;
?>