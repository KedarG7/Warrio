<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}
else
{
    echo "connected";
}
?>