<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  include('db.php');
  $mentor_id = $_SESSION['mid'];
  $domains = $con->real_escape_string($_POST['Domains']); 
  $name= $con->real_escape_string($_POST['name']); 
  $desc= $con->real_escape_string($_POST['description']);
  $choice2 = $con->real_escape_string($_POST['choice2']);
  $choice3 = $con->real_escape_string($_POST['choice3']);
  $choice4 = $con->real_escape_string($_POST['choice4']);
  $choice5 = $con->real_escape_string($_POST['choice5']);
  $choice6 = $con->real_escape_string($_POST['choice6']);

  echo "$choice2";

$sql = "UPDATE  mentordetails SET domain = '$domains', name = '$name', description = '$desc', choice2 = '$choice2', choice3 ='$choice3', choice4 = '$choice4', choice5= '$choice5', choice6 ='$choice6' where mid = $mentor_id";
if(mysqli_query($con, $sql))
  {
    echo "Updated";
    echo "<script>window.location.href='index.php'</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}

 /*function getmentorpost($mentor_id)
 {
   $array = array();
   $sql= "SELECT * FROM 'mentorpost' WHERE 'mid'=".$mentor_id;
   while($row=mysqli_fetch_assoc($sql);)
   {
      $array['file_name'] = $row['file_name'];
   }
   return $array;}*/
 
?>