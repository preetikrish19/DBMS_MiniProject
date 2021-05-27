<?php
session_start();
 include ('db.php'); 
if ($_SERVER["REQUEST_METHOD"] ==="POST") 
{
    $uid1 =$_POST['uid1'];
    $mid1 =$_POST['mid1'];
    $op1=$_POST['op1'];
    if($op1==1)
       {
          $query="INSERT INTO follow (mid,uid) VALUES ('$mid1','$uid1')";
       }
    if($op1==0) 
       {
    $query="DELETE FROM follow where mid=$mid1 AND uid=$uid1"; 
       }
}
    mysqli_query($con, $query);
 //header("Location:mentorlist.php");
mysqli_close($con);
?>