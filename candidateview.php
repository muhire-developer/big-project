<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","lavinia_rec_mgt");
    if ($conn) {
     
       $sql="SELECT * FROM `candidate`";
       $res=mysqli_query($conn,$sql);
    }
    ?>
    <table border="2" cellspan="0px"cellpadding="100px">
        <tr>
            <td>CANDIDATE_NID</td>
            <td>F NAME</td>
            <td>L NAME</td>
            <td>GENDER</td>
            <td>DOB</td>
            <td>ID</td>
            <td>EXAM DAY</td>
            <td>PHONE</td>
            <td>MARKS</td>
            <td colspan="2">ACTIONS</td>
         </tr>
         <tr>
            <?php
            while ($row=mysqli_fetch_assoc($res)) {
              ?> 
               </tr>
               <tr>
                <td><?php echo $row['candidate_nid']?></td>
                 <td><?php echo $row['f_name']?></td>
                  <td><?php echo $row['l_name']?></td>
                   <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['dob']?></td>
                     <td><?php echo $row['id']?></td>
                      <td><?php echo $row['exam_day']?></td>
                       <td><?php echo $row['pho']?></td>
                        <td><?php echo $row['marks']?></td>
                         <td><a href="updatecandidate.php?candidate_nid=<?php echo $row['candidate_nid']?>">update</a></td> 
                          <td><a href="deletecandidate.php?candidate_nid=<?php echo $row['candidate_nid']?>">delete</a></td> 
               </tr>
               <?php
            }
               ?>
    </table>
</body>
</html>