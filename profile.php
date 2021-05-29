<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connection | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class = "bg-dark">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">
<a class="navbar-brand" href="#">
    <img src="images/logo.jpeg" alt="logo" style="width:80px;height:50px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar" class = "navbar justify-content-end">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mentorlist.php">Find a mentor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="domain.php">Domains</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="publicforum.php">Public forum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="postdis.php">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#footer">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profile.php">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>
<div id="main">
  <div id="sidebar">
  <form action="updateform.php" method="post" enctype="multipart/form-data">
  <input type="text" placeholder="Update Name" name="name"><br />
 
  <label for="cars">Choose the domain</label>
          <input type="hidden" name="domain" value="0">
          <input type="checkbox" name="domain" value="1" class="">
          <label for="DSA">DSA</label><br>

          <input type="hidden" name="choice2" value="0">
          <input type="checkbox" name="choice2" value="2" class="">
          <label for="c">C programming</label><br>

          <input type="hidden" name="choice3" value="0">
          <input type="checkbox" name="choice3" value="3" class="">
          <label for="dbms">DBMS</label><br>

          <input type="hidden" name="choice4" value="0">
          <input type="checkbox" name="choice4" value="4" class="">
          <label for="os">OS</label><br>

          <input type="hidden" name="choice5" value="0">
          <input type="checkbox" name="choice5" value="5" class="">
          <label for="os"></label>C++<br>

          <input type="hidden" name="choice6" value="0">
          <input type="checkbox" name="choice6" value="6" class="">
          <label for="os"></label>Python<br> 
    <br> 
    <textarea rows="4" cols="60" placeholder="Update Acheivements" name="description" ></textarea><br/>
    <input type="submit" class="button" value="Update"/><br/>

    <input type="submit" class="button" value="followers"/><br/>
    </form>
    </div>

<br/>
<div id="page-wrap">
<?php
echo "POSTS","<br>";
session_start();
include('db.php');
$mentor_id = $_SESSION['mid'];
$sql1 = "SELECT * FROM mentorpost WHERE mentor_id ='$mentor_id';";
 $result = mysqli_query($con,$sql1);
 $resultcheck = mysqli_num_rows($result);
 if($resultcheck > 0){
   while($row = mysqli_fetch_assoc($result)){
        echo $row['file_name'], "<br>";
   }
  }
   ?>
   </div>
   </div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Oswald', sans-serif;
}
body{
  background: url('images/profilebackground.jpg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}
#main { 
    width: 800px;
    margin: 0 auto;
}
#sidebar    {
    width: 420px;
    height: 450px;
    background:#ffffff ;
    float: left;
    margin-top: 22px;
    margin-right:0px;
    border: 5px solid green;
}

#page-wrap  {
    width: 400px;
    background: #ffffff;
    height: 450px;
    margin-left: 600px;
    border: 5px solid green;
}
.button{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</body>
</html>


