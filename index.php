<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <a href="">view</a>
        <a href="">annocing</a>
        <a href="login.php">login</a>
    </div>
    <form action="" method="post">
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
if (isset($_POST['submit'])) {
     $name=$_POST['name'];
     $password=$_POST['password'];
     $sql="INSERT INTO `user`( `name`, `password`) VALUES ('$name','$password')";
     $res=mysqli_query($conn,$sql);
     header("location:login.php");

}

?>