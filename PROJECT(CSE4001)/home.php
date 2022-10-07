<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
        <style media="screen">
            body{
            text-align: center;
            background-image: url('./image/Cybersecurity.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: white;
            font-size: 25px;
            }
            h1{
            background-color:navy blue;
            height:55px;
            border-radius:17px;
            border-left:solid;
            text-decoration: underline;
            }
            input{
            background-color:white;
            font-size: 25px;
            border-left:solid;
            }
            button{
            background-color:#3AB4F2;
            font-size: 25px;
            border-left:solid;
            }
        </style>
        <h1 > Welcome ! </h1>
        <br>
        <h2 style= "color:white; text-decoration:underline;"> Take a rest and play game</h2>
    </head>
  <body >
      <br>
    Enter a number:<input id= "number">
    <br><br>
    <button type="button" name="button" onclick="sum()"> Sum{0-num}</button>
    <br><br>
    <button type="button" name="button" onclick="factorial()">**Factorial**</button>
    <br><br>
    <button type="button" name="button" onclick="fibonacci()"> fibonacci Sum</button>
    <p id="res"></p> 
    <button type="button" onclick="loadDoc()">**Contributors!</button>
    <p id="demo"></p>
    <script type="text/javascript">
      // Calculate the sum of given range of number.
      function sum(){
         var i, number, sum;
         sum = 0;
         number = document.getElementById("number").value;
         for (i = 0; i <=number; i++) {
           sum= sum+i;
          }
          i = i-1;
          document.getElementById("res").innerHTML = "The sum of given range of the number "+(i)+ " is: "+sum;
      }
      // Calculate the factorial of the given number
      function factorial(){
         var i, number, factorial;
         factorial = 1;
         number = document.getElementById("number").value;
         // Loop implementation
         for (i = 1; i <=number; i++) {
           factorial = factorial*i;
          }
          i = i-1;
          document.getElementById("res").innerHTML = "The factorial of the number "+(i)+ " is: "+factorial;
      }
      // Calculate the fibonacci summision of the given number.
      function fibonacci(){
         var i, number1, number2, fibonacci;
         number1= 0;
         number2=1;
         number = document.getElementById("number").value;
         // If Else condition implementation.
         if(number==0){
           return number1;
         }
         for (i = 2; i <=number; i++) {
           fibonacci = number1+number2;
           number1= number2;
           number2= fibonacci;
          }
          i = i-1;
          document.getElementById("res").innerHTML = "The fibonacci sum of given  number "+(i)+ " is: "+number2;
      }

    //   AJAX Implementation
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "welcome.xml", true);
        xhttp.send();
    }
    </script>
  </body>
</html>