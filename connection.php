<?php

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

//variable for connecting to the database
$connect = mysqli_connect($servername,$username,$password,$dbname);

//testing connection to the database
if($connect)
{
    echo "connection successful";
}

else
{
    echo "No connection";
}

?>
