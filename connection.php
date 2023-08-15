<?php

    $database= new mysqli("localhost","root","","health-connect");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
