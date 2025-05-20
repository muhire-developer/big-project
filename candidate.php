<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <h2>write candidate infomation</h2>
    <form action="" method="post">

<label for="username">first name</label>
        <input type="text" name="f_name" placeholder="enter your firstname" required><br><br>
        <label for="username">last name</label>
        <input type="text" name="l_name" placeholder="enter your lastname" required><br><br>
         <label for="username">gender</label>
        <input type="text" name="gender" placeholder="enter your gender" required><br><br>
         <label for="username">birth day</label>
        <input type="date" name="dob" placeholder="enter your dob" required><br><br>
         <label for="username">day exam</label>
        <input type="text" name="exam_day" placeholder="enter your exams day" required><br><br>
         <label for="username">phone</label>
        <input type="number" name="pho" placeholder="enter your phone number" required><br><br>
         <label for="username">marks</label>
        <input type="text" name="marks" placeholder="enter your marks" required><br><br>
        <button type="submit" name="submit">ADD</button>
    </form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","lavinia_rec_mgt");
if (isset($_POST['submit'])) {
     $f_name=$_POST['f_name'];
     $l_name=$_POST['l_name'];
     $gender=$_POST['gender'];
     $dob=$_POST['dob'];
    $exam_day=$_POST['exam_day'];
     $pho=$_POST['pho'];
     $marks=$_POST['marks'];
    $sql=" INSERT INTO `candidate`( `f_name`, `l_name`, `gender`, `dob`,  `exam_day`, `pho`, `marks`) VALUES
      ('$f_name','$l_name','$gender','$dob','$exam_day','$pho','$marks')";
     $res=mysqli_query($conn,$sql);
     header("location:candidate.php");

}

?>