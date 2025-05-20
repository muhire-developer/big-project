<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form action="" method="post">
        <label for="username">name</label>
        <input type="text" name="name" placeholder="enter your username" required><br><br>
        <label for="password">password</label>
        <input type="password" name="password" placeholder="enter your password" required><br><br>
        <button type="submit" name="submit">register</button>
    </form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","lavinia_rec_mgt");
if (isset($_POST['id'])) {
   header("location:login.php");
   exit();
}
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $password=$_POST['password'];
  $sql="SELECT * FROM `user` WHERE `name`='$name' AND `password`='$password'";
  $res=mysqli_query($conn,$sql);
  if (mysqli_num_rows($res)) {
   $row=mysqli_fetch_assoc($res);
   $_SESSION['name']=$row['name'];
     $_SESSION['password']=$row['password'];
     exit();
     header("location:page.php");
  }else {
    echo "invalide username and password";
  }
}
?>