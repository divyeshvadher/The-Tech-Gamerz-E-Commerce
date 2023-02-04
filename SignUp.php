<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$server="localhost";
$username="root";
$password="";
$database="users";
$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn)
{
  echo 'database not connected';
}
$uname=$_POST["uname"];
$uemail=$_POST["uemail"];
$pass=$_POST["pass"];
$sql="INSERT INTO `login` (`uname`,`email`,`password`)VALUES('$uname','$uemail','$pass')";
$result=mysqli_query($conn,$sql);
if(!$result)
{
  echo 'your detais was not registered';
}
}


?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style1.css"> 
  </head>
  <body>
    <div class="form-container">
      <h2>Sign Up</h2>
      <form action="SignUp.php" method="post">
        <label for="username">Username:</label>'
        <input type="text" id="uname" name="uname" required>
'
        <label for="email">Email:</label>
        <input type="email" id="uemail" name="uemail" required>

        <label for="password">Password:</label>
        <input type="password" id="pass" name="pass" required>
        
        <a href="index.html"><button type="submit" value="submit">submit</button></a>
        
      </form>
    </div>
  </body>
</html>