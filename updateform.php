<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  include('db.php');
  $mentor_id = $_SESSION['mid'];
  $domains = $con->real_escape_string($_POST['Domains']); 
  $name= $con->real_escape_string($_POST['name']); 
  $desc= $con->real_escape_string($_POST['description']);
/* $sql = "UPDATE  mentordetails SET domain = '$domains' where mid = '$mentor_id' ";

  if(mysqli_query($con, $sql))
  {
    echo "posted";
    echo "<script>window.location.href='index.php'</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  } */

$sql = "UPDATE  mentordetails SET domain = '$domains', name = '$name', description = '$desc' where mid = $mentor_id";
if(mysqli_query($con, $sql))
  {
    echo "Updated";
    echo "<script>window.location.href='index.php'</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}

?>