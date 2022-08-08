<?php

//calling a file in php
include("connection.php");

//recognising the submit button
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    //inserting into the database
    $insert = "INSERT INTO form (name,email,password) VALUES('$name','$email','$password')";


    //creating  a connection between database and data entered or insert
    $query = mysqli_query($connect,$insert);

    if($query)
    {
        echo "\nData successfully inserted";

    }
    else
    {
        echo "\nData not inserted";
    }

    // links the data entered into the database from the form directly to display fetched or retrieved data
     
    header("location:fetch.php");

}


?>