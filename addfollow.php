<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] ==="POST") 
{
    include ('db.php');  
 $op =$_POST['op'];
if($op==1) {
$query="UPDATE enrolldetails SET choice1= 1 WHERE uid=$_SESSION[uid] AND choice1=0";
}
if($op==0)
{
  $query="UPDATE enrolldetails SET choice1= 0 WHERE uid=$_SESSION[uid] AND choice1=1";
}
if($op==2){
$query = "UPDATE enrolldetails SET choice2= 2 WHERE uid=$_SESSION[uid] AND choice2=0";
}
if($op==0){
$query="UPDATE enrolldetails SET choice2= 0 WHERE uid=$_SESSION[uid] AND choice2=2 ";}
}
  if($op==3){
  $query = "UPDATE enrolldetails SET choice3= 3 WHERE uid=$_SESSION[uid] AND choice3=0";
  }
  if($op==0){
  $query="UPDATE enrolldetails SET choice3= 0 WHERE uid=$_SESSION[uid] AND choice3=3 ";
 }
if($op==4){
$query = "UPDATE enrolldetails SET choice4= 4 WHERE uid=$_SESSION[uid] AND choice4=0";
}
if($op==0)
{
  $query="UPDATE enrolldetails SET choice4= 0 WHERE uid=$_SESSION[uid] AND choice4=4 ";
 }
if($op==5){
$query = "UPDATE enrolldetails SET choice5= 5 WHERE uid=$_SESSION[uid] AND choice5=0";
}
if($op==0)
{
  $query="UPDATE enrolldetails SET choice5= 0 WHERE uid=$_SESSION[uid] AND choice5=5 "; 
}
if($op==6){
$query = "UPDATE enrolldetails SET choice6= 6 WHERE uid=$_SESSION[uid] AND choice6=0"; 
}
if($op==0)
{
  $query="UPDATE enrolldetails SET choice6= 0 WHERE uid=$_SESSION[uid] AND choice6=6 ";
 }
mysqli_query($con,$query);
mysqli_close($con);
}
?>
