<?php
  session_start();
    include("db.php");
    $did = 2;
    //$sql = "SELECT * FROM mentordetails WHERE domain='$did'";
    $sql2 = "SELECT * FROM mentordetails WHERE choice2='$did' AND display=1";
    //$sql3 = "SELECT * FROM mentordetails WHERE choice3='$did'";
    //$sql4 = "SELECT * FROM mentordetails WHERE choice4='$did'";
    //$result = mysqli_query($con, $sql);
    $result2 = mysqli_query($con, $sql2);
    //$result3 = mysqli_query($con, $sql3);
   // $result4 = mysqli_query($con, $sql4);
    //$details = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $details2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    //$details3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
    //$details4 = mysqli_fetch_all($result4, MYSQLI_ASSOC);
    //$a1 = array_merge('$details', '$details2');
    //$a2 = array_merge('$details3', '$details4');
    //$detailal = array_merge('$a1', '$a2');
    print_r($details2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>C Programming</title>
</head>
<body>
<style>
body {
  background-image: url(images/cplusplus.jpg);
  background-repeat: no-repeat;
        background-size: cover;
}
</style>
<div class="container">
  <h1>C Programming</h1>
  <br>Basics:
<br>Variable Declaration, Dedetailition and Scope:
<br>Data Types:
<br>Storage Classes:
<br>Input/Output:
<br>Operators:
<br>Preprocessor:
<br>Arrays & Strings:
</div>
<div class="container">
  <h1>Roadmap for c programming</h1>
  <br>step1
  <br>step2
  <br> so on...
  <div class="dabba" style="margin-top:5px;">
  <h1 class = "text-white" style = "text-align:center">Our Mentors</h2>
  <div class="row">
  <?php
  foreach($details2 as $detail){
  ?>
  <div class="col-sm-4">
    <div class="card" style="width:340px">
    <img class="card-img-top" src="images/person.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title" style="color:black;"><?php echo $detail['name'];?></h4>
      <p class="card-text" style="color:black;"><?php echo $detail['description'];?></p>

      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  </div>
  <?php
    }
  ?>
  </div>
</div>
</div>
</div>
<br>
<div id="footer">

 <?php
   include('footer.php')
 ?>
 </div>
