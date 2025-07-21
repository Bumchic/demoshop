<?php
function connectDb()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "demoshop";
    $connection = new mysqli($host, $username, $password, $dbName);
    return $connection;
}
?>