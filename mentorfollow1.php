<?php
session_start();
 include ('db.php'); 
if ($_SERVER["REQUEST_METHOD"] ==="POST") 
{
    $uid2 =$_POST['uid2'];
    $mid2 =$_POST['mid2'];
    $op2 =$_POST['op2'];
       if($op2==1)
       {
          $query="INSERT INTO follow (mid,uid) VALUES ('$mid2','$uid2')";  
       }
    if($op2==0) 
       {
    $query="DELETE FROM follow where mid=$mid2 AND uid=$uid2"; 
       }
}
    mysqli_query($con, $query);
 //header("Location:mentorlist.php");
mysqli_close($con);
?>