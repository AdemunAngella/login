<!-- php code for retrieved data from database -->
<?php

//calling a file in php
include("connection.php");

//Selecting or retrieving data from the database
$select = "SELECT* FROM form";

//creating  a connection between database and data select
$result = mysqli_query($connect,$select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetched Data</title>
    <link rel="stylesheet" href="./Bootstrap-4.6.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./Bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                </tr>
            </thead>
            <tbody>
               <!-- using php code in the body where the data will be put or retrieved into -->
<?php

// use a while for extracting out the data from the database until its done
//since every attribute has a list, every list is an array

while($row = mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['name']; ?> </td>
        <td> <?php echo $row['email']; ?> </td>
        <td> <?php echo $row['password']; ?> </td>
    </tr>

    <?php
}

?>

            </tbody>
        </table>
    </div> 
</body>
</html>