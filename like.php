<?php
session_start();
 include ('db.php'); 
if ($_SERVER["REQUEST_METHOD"] ==="POST") 
{
    $lk =$_POST['lk'];
    $pid=$_POST['pid'];
    $uid=$_SESSION['uid'];
    if($lk==1)
       {
          $query="UPDATE mentorpost set likes = likes + 1 WHERE Post_id=$pid";  
          $query1="INSERT INTO  likestab (uid,pid,lk) VALUES ('$uid','$pid',1)";
       }
    if($lk==0) 
       {
          $query="UPDATE mentorpost set likes = likes-1 WHERE Post_id=$pid"; 
         $query1="DELETE FROM likestab WHERE uid=$uid AND pid=$pid";
      }
}
   mysqli_query($con, $query);
   mysqli_query($con, $query1);
   mysqli_close($con);
?>