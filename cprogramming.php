<?php
  session_start();
    include("db.php");
    $did = 5;
    $sql = "SELECT * FROM mentordetails WHERE domain='$did'";
    $result = mysqli_query($con, $sql);
    $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($details);
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
<br>Variable Declaration, Definition and Scope:
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
  foreach($details as $detail){
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
