<?php
session_start();
include "db.php";
$sql = "SELECT choice1,choice2,choice3,choice4,choice5,choice6 FROM enrolldetails where uid=$_SESSION[uid]";
$query = mysqli_query($con, $sql);
while($rs = mysqli_fetch_assoc($query)){
    $choice1= $rs['choice1'];
    $choice2 = $rs['choice2'];
    $choice3 = $rs['choice3'];
    $choice4= $rs['choice4'];
    $choice5 = $rs['choice5'];
    $choice6 = $rs['choice6'];
  }
  if(!($result = $con->query($sql))){
    die($con->error);
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connection | Domains</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "styleindex.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.m in.css" rel="stylesheet" />
  <style>
body {
    background-image: url("images/background.jpeg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>
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
    
    <!--

    <li class="nav-item">
      <a class="nav-link" href="mentorlogin.php">Be a mentor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="enroll.php">Enroll</a>
    </li>-->
    <li class="nav-item">
      <a class="nav-link active" href="#">Domains</a>
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
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>

<h1 class = "text-white" style = "text-align:center">Domains</h2>
<div class="row">
  <div class="container">
<div class="row">
  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/c ++.png" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">C++ Programming</h4>
      <a href="cplusplus.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
  <button name="s5" class="btn btn-primary" id="f5" style="background-color:green;" 
  onclick="return change5();" type="submit" value="5">+ Follow</button>
</form>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/DSA(1).png" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">DSA</h4>
      <a href="dsa.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
  <button name="s1" class="btn btn-primary" id="f1" style="background-color:green;" 
   type="submit" onclick="return change1();" value="1">+ Follow</button>
</form>
    </div>
  </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/dbms.jpg" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">DBMS</h4>
      <a href="dbms.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
  <button name="s3" class="btn btn-primary" id="f3" style="background-color:green;" 
  onclick="return change3();" type="submit" value="3">+ Follow</button>
</form>
    </div>
  </div>
  </div>

</div>
<div class = "row">
  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/python.jfif" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">PYTHON</h4>
      <a href="python.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
  <button name="s6"  class="btn btn-primary" id="f6" style="background-color:green;" 
  onclick="return change6();" type="submit" value="6">+ Follow</button>
</form>
    </div>
  </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/c.png" alt="Card image" style="width:100% height:350px">
    <div class="card-body">
      <h4 class="card-title">C programming</h4>
      <a href="cprogramming.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
  <button name="s2" id="f2" class="btn btn-primary" style="background-color:green;" 
  onclick="return change2();" type="submit" value="2">+ Follow</button>
</form>
    </div>
  </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/os.jpg" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">Operating Systems</h4>
      <a href="os.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
  <button name="s4" class="btn btn-primary" id="f4" style="background-color:green;" 
  onclick="return change4();" type="submit" value="4">+ Follow</button>
      </form>
    </div>   
  </div>
  </div>
</div>
<br>
<br>
</div>
<script type="text/javascript">
$(function() { 
  c1();
  c2();
  c3();
  c4();
  c5();
  c6();
});
function c1()
 {
   var a ="<?php echo $choice1;?>";
 //alert(a);
  if ( a == 1 )
        s11 = "Unfollow";
    else
        s11= "+ Follow";
    document.getElementById("f1").innerHTML=s11;
}
function c2()
 {
   var b ="<?php echo $choice2;?>";
 //alert(b);
  if ( b == 2 )
        s22 = "Unfollow";
    else
        s22= "+ Follow";
    document.getElementById("f2").innerHTML=s22;
}
function c3()
 {
   var c ="<?php echo $choice3;?>";
 //alert(c);
  if ( c == 3 )
        s33 = "Unfollow";
    else
        s33= "+ Follow";
    document.getElementById("f3").innerHTML=s33;
}
function c4()
 {
   var d ="<?php echo $choice4;?>";
 //alert(d);
  if ( d == 4 )
        s44 = "Unfollow";
    else
        s44= "+ Follow";
    document.getElementById("f4").innerHTML=s44;
}
function c5()
 {
   var e ="<?php echo $choice5;?>";
 //alert(e);
  if ( e== 5)
        s55 = "Unfollow";
    else
        s55= "+ Follow";
    document.getElementById("f5").innerHTML=s55;
}
function c6()
 {
   var f ="<?php echo $choice6;?>";
 //alert(f);
  if ( f == 6 )
        s66 = "Unfollow";
    else
        s66= "+ Follow";
    document.getElementById("f6").innerHTML=s66;
}
function change1(){
  var s11 = document.getElementById("f1").innerHTML;
    if ( s11 === "+ Follow")
        {
           s11 = "Unfollow";
          }
            else
        {
          s11= "+ Follow";
        }
    if ( s11==="+ Follow")
        {
           s111 = 10;
          }
            else
        {
          s111 = 1;
        }
        document.getElementById("f1").innerHTML=s11;
    document.getElementById("f1").value=s111;
}
function change2()
{
    var s22 = document.getElementById("f2").innerHTML;
    if ( s22 === "+ Follow")
        {
           s22 = "Unfollow";
          }
            else
        {
          s22= "+ Follow";
        }
    if ( s22==="+ Follow")
        {
           s222 = 20;
          }
            else
        {
          s222 = 2;
        }
        document.getElementById("f2").innerHTML=s22;
    document.getElementById("f2").value=s222;
}
function change3()
{
  var s33 = document.getElementById("f3").innerHTML;
    if ( s33 === "+ Follow")
        {
           s33 = "Unfollow";
          }
            else
        {
          s33= "+ Follow";
        }
    if ( s33==="+ Follow")
        {
           s333 = 30;
          }
            else
        {
          s333= 3;
        }
        document.getElementById("f3").innerHTML=s33;
    document.getElementById("f3").value=s333;
}
function change4()
{
  var s44= document.getElementById("f4").innerHTML;
    if ( s44=== "+ Follow")
        {
           s44 = "Unfollow";
          }
            else
        {
          s44 = "+ Follow";
        }
    if ( s44==="+ Follow")
        {
           s444 = 40;
          }
            else
        {
          s444= 4;
        }
        document.getElementById("f4").innerHTML=s44;
    document.getElementById("f4").value=s444;
}
function change5()
{
  var s55 = document.getElementById("f5").innerHTML;
    if ( s55 === "+ Follow")
        {
           s55 = "Unfollow";
          }
            else
        {
          s55= "+ Follow";
        }
    if ( s55==="+ Follow")
        {
           s555 = 50;
          }
            else
        {
          s555= 5;
        }
        document.getElementById("f5").innerHTML=s55;
    document.getElementById("f5").value=s555;
}
function change6()
{
  var s66 = document.getElementById("f6").innerHTML;
    if ( s66=== "+ Follow")
        {
           s66 = "Unfollow";
          }
            else
        {
          s66= "+ Follow";
        }
    if ( s66==="+ Follow")
        {
           s666 = 60;
          }
            else
        {
          s666 = 6;
        }
        document.getElementById("f6").innerHTML=s66;
    document.getElementById("f6").value=s666;
 }
</script>
</body>
</html>
<?php
}
?>