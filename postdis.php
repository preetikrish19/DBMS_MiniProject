<?php
session_start();
include('db.php');
//$sql1= " SELECT * FROM enrolldetails INNER JOIN follow on enrolldetails.uid = follow.uid INNER JOIN mentordetails on 
//mentordetails.mid = follow.mid INNER JOIN mentorpost on mentordetails.mid=mentorpost.mentor_id 
//WHERE follow.uid=$_SESSION[uid]" ;
$sql1="SELECT * FROM postdisplay2 WHERE uid=$_SESSION[uid]";
$query = mysqli_query($con, $sql1);
if(!($result1= $con->query($sql1))){ 
  die($con->error);
}
else {
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
td,th{
  font-size: 20px;
  color: white;
}
/*
  body {
  background-image: url(images/postimg.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  }
  */
    .button {
  display: inline-block;
  padding: 5px 15px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
   </style>
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
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mentorlist.php">Find a mentor</a>
    </li>
    
    <!--

    <li class="nav-item">
      <a class="nav-link" href="mentorlogin.php">Be a mentor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="enroll.php">Enroll</a>
    </li>-->
    <li class="nav-item">
      <a class="nav-link" href="domain.php">Domains</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="publicforum.php">Public forum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#footer">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>
<div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
      <th>S.NO</th>
    <th>MENTOR NAME</th>
    <th>DESCRIPTION</th>
    <th>DOMAIN</th>
    <th>FILENAME</th>
      </tr>
    </thead>
    <?php
    $i=1;
while($row = mysqli_fetch_assoc($result1)){
$d=$row['Domains'];
$r1=$row['choice1'];
$r2=$row['choice2'];
$r3=$row['choice3'];
$r4=$row['choice4'];
$r5=$row['choice5'];
$r6=$row['choice6'];
$p=$row['Post_id'];
  if($d==1)
        $dd="DSA";
  if($d==2)
        $dd="C PROGRAMMING";
  if($d==3)
        $dd="DBMS";
  if($d==4)
        $dd="OPERATING SYSTEMS";
  if($d==5)
        $dd="C++";
  if($d==6)
       $dd="PYTHON";
if($d==$r1 || $d==$r2 || $d==$r3 || $d==$r4 || $d==$r5 || $d==$r6)
   {    ?>
    <tbody>
    <tr>
    <td><b><?php echo $i; ?></b></td>
    <td><b><?php echo $row['name'];?></b></td>
    <td><b><?php echo $row['post_description'];?></b></td>
    <td><b><?php echo $dd; ?></b></td>
    <td><b><a href="upload/<?php echo $row['file_name'] ?>" target="_blank">
    <button class="button"><img src="images/mail.png" width="25" height="25">  CLICK HERE TO VIEW</button></a></b></td>
    </tr>
    <?php  
    $i++;
   }
      } ?>
    </tbody>
  </table>
</div>
</body>
</html>
<?php }
?>