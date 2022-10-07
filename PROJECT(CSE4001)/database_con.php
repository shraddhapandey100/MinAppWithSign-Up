
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connectivity</title>
    <style>
        body{
            background-color:lightblue;
            padding: 25px;
            font-size: 25px;   
        }
    </style>
</head>
<body>
    <img src="./image/image.png" alt="image is loading">
    <?php
    // Making the connection with the database
    $servername= "localhost";
    $username= "root";
    $password= "";
    $database_name= "RegitrationForm";

    $con=mysqli_connect($servername, $username, $password);
    echo"<br>";
    echo "connection successfully <br>";

    // creating the database

    $query= "create database RegitrationForm";
    if(mysqli_query($con,$query)){
        echo"<br>";
        echo "Database created successfully";
    }
    else{
        echo"<br>";
        echo "Database exist or already exist";

    }
    echo"<br>";
    // Coding for creating Table
    $con1=mysqli_connect($servername, $username, $password,$database_name);
    $query= "CREATE TABLE User(id int(3) primary key, username varchar(244) not null, pass varchar(244) not null, email varchar(244) not null)";
    if(mysqli_query($con1,$query)){
        echo "<br>Table created successfully";
    }
    else{
        echo "Table exist or already exist";
    }

    ?>
</body>
</html>

