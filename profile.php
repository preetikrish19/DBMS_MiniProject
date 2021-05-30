
<?php
//echo "POSTS","<br>";
session_start();
include('db.php');
$mentor_id = $_SESSION['mid'];
//echo $mentor_id;
$sql3 = "SELECT follow.mid, enrolldetails.uid, enrolldetails.name FROM follow INNER JOIN enrolldetails ON enrolldetails.uid=follow.uid WHERE follow.mid=$mentor_id";
$result3 = mysqli_query($con,$sql3);
$details3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
//print_r($details3);
$sql2="SELECT * FROM countfollow WHERE mid=$mentor_id";
$result2 = mysqli_query($con,$sql2);
$details2 = mysqli_fetch_array($result2, MYSQLI_BOTH);
$sql1 = "SELECT * FROM mentorpost INNER JOIN domain ON mentorpost.Domains=domain.did WHERE mentor_id ='$mentor_id';";
$result = mysqli_query($con,$sql1);
$details = mysqli_fetch_all($result, MYSQLI_ASSOC);
//print_r($details);
$resultcheck = mysqli_num_rows($result);
$i=1;
$j=1;
?>
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

  <style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  /*font-family: 'Oswald', sans-serif;*/
}
/*
body{
  background: url('images/profilebackground.jpg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}
*/
#main { 
    width: 800px;
    /*margin: 0 auto;*/
    margin-left: 150px;
    padding: 1em;
}
#sidebar    {
    width: 420px;
    height: 450px;
    background:#ffffff ;
    float: left;
    margin-top: 22px;
    margin-left: 10px;
    margin-right:0px;
    border: 5px solid grey;
    padding: 1em;
    opacity: 0.8;

}

#page-wrap  {
    width: 400px;
    background: #ffffff;
    height: 450px;
    margin-left: 700px;
    border: 5px solid grey;
    opacity: 0.8;
    padding: 1em;

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
#dabba{
      margin-left: 150px;
      margin-right: 150px;
      margin-bottom: 100px;

}
</style>
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
      <a class="nav-link active" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#about">About</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Messages
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-dark active" href="messages.php" style="color: white">Follow</a>
          <div class="dropdown-divider bg-light"></div>
          <a class="dropdown-item bg-dark" href="unfollowchat.php" style="color: white">Unfollow</a>
        </div>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="domain2.php">Domains</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="publicforum.php">Public Forum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="post.php">Post</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#footer">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Your profile</a>
    <li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>
<h3>
<div style="color:white; margin-top: 10px; text-align:center;">Hello, <?php echo $_SESSION['name'];?> You have <?php echo $details2['count'];?> followers</div>
</h3>
<div id="main">
  <div id="sidebar">
  <form action="updateform.php" method="post" enctype="multipart/form-data">
  <input type="text" placeholder="Update Name" name="name"><br />
 
  <label for="cars">Choose the domain</label><br>

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
    <textarea rows="4" cols="60" placeholder="Update Acheivements" name="description" style="width:350px;"></textarea><br/>
    <input type="submit" class="button" value="Update"/><br/>
    </form>
    </div>

<br/>
<div id="page-wrap">
Your Posts:
<?php if($resultcheck > 0){ ?>
<table class="table table-dark">
<thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">File link</th>
      <th scope="col">Domain Name</th>
    </tr>
  </thead>
<?php foreach($details as $detail){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><a href="upload/<?php echo $detail['file_name']; ?>"><?php echo $detail['file_name']; ?></a></td>
      <td><?php echo $detail['dname']; ?></td>
    </tr>
  </tbody>
  <?php $i++;} ?>
</table>
<?php } 
else {?>
<div>You Have not posted Yet!!!</div>
<?php } ?>
</div>
   </div>
   <div id="dabba">
   <h4>
   <div style="color:white; margin-top: 10px; text-align:center;">You have <?php echo $details2['count'];?> followers</div>
   </h4>
   <br>
   <table class="table text-center" style="color: white; border: 1px solid white">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($details3 as $detail3){?>
    <tr>
      <th scope="row"><?php echo $j; ?></th>
      <td><?php echo $detail3['name']; ?></td>
    </tr>
    <? $j++;} ?>
  </tbody>
</table>
</div>
<?php include('footer.php'); ?>
</body>
</html>


