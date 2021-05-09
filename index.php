<?php
session_start();
if(isset($_SESSION['login'])){
if($_SESSION['login'] == 0){
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
  <link rel = "stylesheet" href = "styleindex.css">
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
      <a class="nav-link" href="index.php#footer">Contact</a>
</li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>

<body>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/mentor mentee.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>We’re here for a reason. I believe a bit of the reason</h3>
        <h3>is to throw little torches out to lead people through the dark</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mentor mentee(1).jpeg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Consultant | Counselor | Cheerleader</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mentor mentee(2).jpeg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div id="about" class = "grid-container">
    <div class = "grid-child">
        <img src = "images/imf.jpg" style = "height:400px;width:600px">
</div>
<div class = "grid-child">
    <h1 id="heading">About</h1>
    <p>
    Computer technology has become an integral part of our daily life. It is the most important element in the education
     of students of the present and the future era. Computer Technology has revolutionized society to a great extent.
     Technological advancements are so rapid in this field that continual learning is essential to keep the skill set
     of students up to date. The department of Computer Technology was recently established in MIT campus of Anna University
     by bifurcating the department of Information Technology. The department offers course in computer science and engineering
     at undergraduate & postgraduate levels and full time/part time research programs.
    The teaching and learning process emphasizes equally on theoretical and practical aspects catering to the needs of industries.
 </p>
     </div>
</div>

<div id="footer">

<?php
  include('footer.php')
?>
</div>

</body>
</html>
<?php }
  elseif ($_SESSION['login']==1) {
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
  <link rel = "stylesheet" href = "styleindex.css">
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
      <a class="nav-link" href="index.php#footer">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>

<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/mentor mentee.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>We’re here for a reason. I believe a bit of the reason</h3>
        <h3>is to throw little torches out to lead people through the dark</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mentor mentee(1).jpeg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Consultant | Counselor | Cheerleader</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mentor mentee(2).jpeg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div id="about" class = "grid-container">
    <div class = "grid-child">
        <img src = "images/imf.jpg" style = "height:400px;width:600px">
</div>
<div class = "grid-child">
    <h1 id="heading">About</h1>
    <p>
    Computer technology has become an integral part of our daily life. It is the most important element in the education
     of students of the present and the future era. Computer Technology has revolutionized society to a great extent.
     Technological advancements are so rapid in this field that continual learning is essential to keep the skill set
     of students up to date. The department of Computer Technology was recently established in MIT campus of Anna University
     by bifurcating the department of Information Technology. The department offers course in computer science and engineering
     at undergraduate & postgraduate levels and full time/part time research programs.
    The teaching and learning process emphasizes equally on theoretical and practical aspects catering to the needs of industries.
 </p>
     </div>
</div>
<div id="footer">

<?php
  include('footer.php')
?>
</div>

</body>
</html>
<?php }}
 else {
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
   <link rel = "stylesheet" href = "styleindex.css">
 </head>
 <body">

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

     <li class="nav-item">
       <a class="nav-link" href="mentorlogin.php">Be a mentor</a>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="enroll.php">Enroll</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="domain.php">Domains</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="index.php#footer">Contact</a>
     </li>

   </ul>
   </div>
 </nav>

 <body>

 <div id="demo" class="carousel slide" data-ride="carousel">
   <ul class="carousel-indicators">
     <li data-target="#demo" data-slide-to="0" class="active"></li>
     <li data-target="#demo" data-slide-to="1"></li>
     <li data-target="#demo" data-slide-to="2"></li>
   </ul>
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/mentor mentee.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>We’re here for a reason. I believe a bit of the reason</h3>
        <h3>is to throw little torches out to lead people through the dark</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mentor mentee(1).jpeg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Consultant | Counselor | Cheerleader</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/mentor mentee(2).jpeg" alt="New York">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
     <span class="carousel-control-prev-icon"></span>
   </a>
   <a class="carousel-control-next" href="#demo" data-slide="next">
     <span class="carousel-control-next-icon"></span>
   </a>
 </div>
 <div id="about" class = "grid-container">
    <div class = "grid-child">
        <img src = "images/imf.jpg" style = "height:400px;width:600px">
</div>
<div class = "grid-child">
    <h1 id="heading">About</h1>
    <p>
    Computer technology has become an integral part of our daily life. It is the most important element in the education
     of students of the present and the future era. Computer Technology has revolutionized society to a great extent.
     Technological advancements are so rapid in this field that continual learning is essential to keep the skill set
     of students up to date. The department of Computer Technology was recently established in MIT campus of Anna University
     by bifurcating the department of Information Technology. The department offers course in computer science and engineering
     at undergraduate & postgraduate levels and full time/part time research programs.
    The teaching and learning process emphasizes equally on theoretical and practical aspects catering to the needs of industries.
 </p>
     </div>
</div>
 <div id="footer">

 <?php
   include('footer.php')
 ?>
 </div>

 </body>
 </html>
<?php } ?>
