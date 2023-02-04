<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$server="localhost";
$username="root";
$password="";
$database="users";
$conn=mysqli_connect($server,$username,$password,$database);
$name=$_POST["username"];
$pass=$_POST["password"];
if(!$conn)
{
  echo 'database not connected';
}
$sql="select * from `login` where `uname`='$name'and `password`='$pass'";

$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);
if($check>0)
{
  $row=mysqli_fetch_assoc($result);
  if($row==0)
  {
    echo 'you have not confirmed your account';
  }
  else
  {
    echo 'done';
  }
}
if(empty($_POST["username"])&&empty($_POST["password"])){
  echo 'email is required';
}
}

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
  <div class="form-container">
    <h2>Log in</h2>
    <form action="zindex.php" method="post">
      <label for="username">Username/E-mail:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <!-- <a href="index.html" class="submit1">Submit</a> -->

      <a href="SignUp.html"><button type="submit" value="submit">Sign Up</a>
        <a href="index.html"><button type="submit" value="submit">submit</button></a>
    </form>
  </div>
</body>
</html>