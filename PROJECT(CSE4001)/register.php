<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="./javacript.js"></script>
</head>
<body>   
    <!-- <div class="alert" style="background-color:powderblue;"></div> -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="form">
        <h1 style="color:white">--Sign Up--</h1>
        <img src="./image/image.png" alt="image is loading">

        <div class="form-element">
            <label for="">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" id="username" name="username" pattern="(?=.*[a-z])(?=.*[A-Z]).{3,}" title= "Must contain atleast one number and and at least 3 or more characters." placeholder="Enter the Username" required >
        </div>

       <div class="form-element" name="div">
            <label for="">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" id="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="Enter the Password"  required>
       </div>

       <div class="form-element" name="div">
            <label for="">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" id="Confirm-Password" name="cpassword" placeholder="Confirm the Password" required >
      </div>

      <div class="form-element" name="div">
            <label for="">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" id="eamil" name="email"  placeholder="Enter the Email">
      </div>

      <button type="submit" id="login" name="save"><i class="fas fa-lock"></i> Sign Up </button>
      
      <div id="register-account">
        Already have a account ? <span><a href="./index.php">Login</a></span>
      </div>

    </form>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])){
        $servername= "localhost";
        $username= "root";
        $password= "";
        $database_name= "RegitrationForm";
        $con=mysqli_connect($servername, $username, $password, $database_name);

        $username= $_POST['username'];
        $password= $_POST['password'];
        $cpassword= $_POST['cpassword'];
        $email= $_POST['email'];
        // Query for fetching the data from the database.
        $sql = "SELECT * FROM user WHERE email = '{$email}'";
        $reg = mysqli_query($con, $sql);
        if(mysqli_num_rows($reg)>0){
            echo "<div class='alert'> Email already exist. </div>";
        }
        else{  
            if($password===$cpassword){
                $sql = "INSERT INTO user(username,email, pass) values('$username','$email','$password')";
                if(mysqli_query($con,$sql)){
                    echo "<div class='alert'> Hello $username you have registered successfully. </div>";
                }else{
                    echo"<div class= 'alert'> Error you are unable to register right now</div>";
                }
            } 
            else{
                echo "<div class='alert'> confirm-password is not correct. </div>";

            }  
        }
    }
?>
    
</body>

</html>