<?php
//connection to our database

$serverName ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="lotans_db";

$conn =mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

