<?php

    $server_address = "localhost";              	//If you connecting remotely to this database you need to set the hostname of your server and you need to allow access to your ip from server
    $database_name = "tuhinmri_webscrap";   	    //Set your database name
    $username = "root";		    //Set your database username
    $password = "";		    //Set database password
    
    // Create connection
    $db = new mysqli($server_address, $username, $password, $database_name);
    
?>