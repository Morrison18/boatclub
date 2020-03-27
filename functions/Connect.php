<?php

function dbConnect()
{
    $servername = 'localhost';
    $username = 'root';
    $password = 'test';
    $dbname = 'boatclub';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }
    echo ' succesfully connected. '; 
    echo '<br>';

    return  $conn;
}

?>

