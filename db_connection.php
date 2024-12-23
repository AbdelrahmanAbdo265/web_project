<?php
    $servername = "localhost"; // Localhost is the default for local servers
    $username = "root";        // Default username for XAMPP and WAMP is 'root'
    $password = "";            // Default password for XAMPP and WAMP is empty
    $db_name = "shopping_database";      // Match this to the database name you created    
    $conn = new mysqli($servername, $username, $password, $db_name, 3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "";
?>
