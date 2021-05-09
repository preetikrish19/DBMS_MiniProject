<?php
  session_start();
    include("db.php");
    $did = 6;
    $sql = "SELECT * FROM mentordetails WHERE domain='$did'";
    $result = mysqli_query($con, $sql);
    $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($details);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Python Programming</title>
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
  <h1>Python Programming</h1>
  Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL). This tutorial gives enough understanding on Python programming language.

Why to Learn Python?
Python is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed to be highly readable. It uses English keywords frequently where as other languages use punctuation, and it has fewer syntactical constructions than other languages.

Python is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning Python:

  <h1>Roadmap for Python</h1>
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
<br>
<div id="footer">

 <?php
   include('footer.php')
 ?>
 </div>
</body>
</html>
