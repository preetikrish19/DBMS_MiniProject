<?php
  session_start();
    include("db.php");
    $did = 4;
    $sql = "SELECT * FROM mentordetails WHERE domain='$did'";
    $result = mysqli_query($con, $sql);
    $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($details);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Operating System</title>
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
<h1>Operating System</h1>
An operating system (OS) is a collection of software that manages computer hardware resources and provides common services for computer programs. The operating system is a vital component of the system software in a computer system. This tutorial will take you through step by step approach while learning Operating System concepts.
<br>Why to Learn Operating System?
An Operating System (OS) is an interface between a computer user and computer hardware. An operating system is a software which performs all the basic tasks like file management, memory management, process management, handling input and output, and controlling peripheral devices such as disk drives and printers.

Some popular Operating Systems include Linux Operating System, Windows Operating System, VMS, OS/400, AIX, z/OS, etc.

Following are some of important functions of an operating System.
<br>Memory Management
<br>Processor Management
<br>Device Management
<br>File Management
<br>Security
<br>Control over system performance
<br>Job accounting
<br>Error detecting aids
<br>Coordination between other software and users
  <h1>Roadmap for OS</h1>
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
