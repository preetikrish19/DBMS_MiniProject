<?php
session_start();
if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==1){
include "../db.php";
$mid = $_POST['mid'];
$select = $_POST['select'];
$query = "UPDATE mentordetails SET display = '$select' WHERE mid = '$mid'";
if(!($result = $con->query($query))){
    die($con->error);
}
else{
    echo "Updated";
      echo "<script>window.location.href='console.php'</script>";
}
    }
}

    else {
        echo "Access denied";
      }

?>
