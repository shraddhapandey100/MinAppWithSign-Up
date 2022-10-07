<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="form">
        <h1 style="color:white">--Login--</h1>
        <img src="./image/image.png" alt="image is loading">
        <p id="p1"></p>
        <div class="form-element">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" id="username" name= "username" placeholder="Enter the Username" required>
        </div>

       <p id="p2"></p>
        <div class="form-element" name="div">
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" id="Password" name= "password" placeholder="Enter the Password" required >
        </div>

        <div class="form-element" name="div">
            <label for="">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" id="eamil" name="email"  placeholder="Enter the Email" required>
       </div>
        
       <button type="submit" id="login" name="submit" value="login"><i class="fas fa-lock"></i>Submit</button>

      <div id="register-account">
        Not have a account ? <span><a href="./register.php">register</a></span>
      </div>
    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        $servername= "localhost";
        $username= "root";
        $password= "";
        $database_name= "RegitrationForm";
        $con=mysqli_connect($servername, $username, $password, $database_name);
        $email= $_POST['email'];
        $password= $_POST['password'];
        $sql = "SELECT * FROM user WHERE email= '$email'";
        $reg = mysqli_query($con, $sql);

        if(mysqli_num_rows($reg)===1){
            $row= mysqli_fetch_assoc($reg);
            $pass= $row['pass'];
            if($pass===$password){
                session_start();
                $_SESSION['user']= $row['username'];
                header("location://localhost/PROJECT(CSE4001)/home.php");
            }else{
                echo "<div class='alert'> Hello $username Invalid password. </div>";
            }   
        }
        else{
            echo "<div class='alert'> Hello $username Invalid email. </div>";
        }
    }
?>

</body>
</html>