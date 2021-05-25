<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] ==="POST") 
{
    include ('db.php');  
    $s1 =$_POST['s1'];
    $s2 =$_POST['s2'];
    $s3 =$_POST['s3'];
    $s4 =$_POST['s4'];
    $s5 =$_POST['s5'];
    $s6 =$_POST['s6'];
    if($s1==1)
       { 
       $query="UPDATE enrolldetails SET choice1= 1 WHERE uid=$_SESSION[uid] AND choice1=0"; 
       }
    if($s2==2)
       {
       $query = "UPDATE enrolldetails SET choice2= 2 WHERE uid=$_SESSION[uid] AND choice2=0";
       }
     if($s3==3)
       {
         $query = "UPDATE enrolldetails SET choice3= 3 WHERE uid=$_SESSION[uid] AND choice3=0";
       }
      if($s4==4)
       {
      $query = "UPDATE enrolldetails SET choice4= 4 WHERE uid=$_SESSION[uid] AND choice4=0";
      }
      if($s5==5)
       {
          $query = "UPDATE enrolldetails SET choice5= 5 WHERE uid=$_SESSION[uid] AND choice5=0"; 
       }
       if($s6==6)
        {
           $query = "UPDATE enrolldetails SET choice6= 6 WHERE uid=$_SESSION[uid] AND choice6=0";   
        }
      if($s1==10)
       {
        $query="UPDATE enrolldetails SET choice1= 0 WHERE uid=$_SESSION[uid] AND choice1=1";  
       }
      if($s2==20)
       {
       $query="UPDATE enrolldetails SET choice2= 0 WHERE uid=$_SESSION[uid] AND choice2=2 ";    
       }
      if($s3==30)
        {
        $query="UPDATE enrolldetails SET choice3= 0 WHERE uid=$_SESSION[uid] AND choice3=3";
        }
      if($s4==40)
        {
       $query="UPDATE enrolldetails SET choice4= 0 WHERE uid=$_SESSION[uid] AND choice4=4";
        }
       if($s5==50)
        {
       $query="UPDATE enrolldetails SET choice5= 0 WHERE uid=$_SESSION[uid] AND choice5=5";  
        }
       if($s6==60) 
        {
       $query="UPDATE enrolldetails SET choice6= 0 WHERE uid=$_SESSION[uid]  AND choice6=6"; 
        }
}

    mysqli_query($con, $query);
    header("Location:domain.php");
   mysqli_close($con);
?>