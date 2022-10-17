<?php

define ('DB_NAME', 'Family');
define ('DB_USER', 'Admin');
define ('DB_PASSWORD','@Dmin123');
define ('DB_HOST', 'localhost');

$connection= @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

if(!$connection) {
    die( 'Could not connect'.mysqli_connect_error());
}


?>