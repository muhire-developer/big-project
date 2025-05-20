<?php
$conn=mysqli_connect("localhost","root","","lavinia_rec_mgt");
$candidate=$_GET['candidate_nid'];
if (isset($_GET['candidate_nid'])) {
$candidate=$_GET['candidate_nid'];
$sql="UPDATE `candidate` SET `f_name`='$f_name',`l_name`='$l_name',`gender`='$gender',`dob`='$dob',`id`='$id',`exam_day`='$exam_day',`pho`='$pho',`marks`='$marks' WHERE `candidate_nid`='$candidate_nid'";
$res=mysqli_query($conn,$sql);



$sql="SELECT  `f_name`, `l_name`, `gender`, `dob`, `id`, `exam_day`, `pho`, `marks` FROM `candidate` WHERE `candidate_nid`='$candidate_nid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>update candidate infomation</h2>
    <form action="" method="post">

<label for="username">first name</label>
        <input type="text" name="f_name" placeholder="enter your firstname" required  VALUES="<?php echo $row['f_name'];?>"><br><br>
        <label for="username">last name</label>
        <input type="text" name="l_name" placeholder="enter your lastname" required VALUES="<?php echo $row['l_name'];?>"><br><br>
         <label for="username">gender</label>
        <input type="text" name="gender" placeholder="enter your gender" required VALUES="<?php echo $row['gender'];?>"><br><br>
         <label for="username">birth day</label>
        <input type="date" name="dob" placeholder="enter your dob" required VALUES="<?php echo $row['dob'];?>"><br><br>
         <label for="username">day exam</label>
        <input type="text" name="exam_day" placeholder="enter your exams day" required VALUES="<?php echo $row['exam_day'];?>"><br><br>
         <label for="username">phone</label>
        <input type="number" name="pho" placeholder="enter your phone number" required VALUES="<?php echo $row['pho'];?>"><br><br>
         <label for="username">marks</label>
        <input type="text" name="marks" placeholder="enter your marks" required VALUES="<?php echo $row['marks'];?>"><br><br>
        <button type="submit" name="submit">ADD</button>
</form>
</body>
</html>