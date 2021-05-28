<?php 
session_start();
if(isset($_SESSION['login'])){
if($_SESSION['login'] == 0){
include('db.php');
$i = 1;
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
  .dabba1{
        text-align: center;
      margin-top: 1em;

  }
  </style>
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
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#about">About</a>
    </li>
    <!--
    <li class="nav-item">
      <a class="nav-link" href="mentorlist.php">Find a mentor</a>
    </li>-->
    <!--

    <li class="nav-item">
      <a class="nav-link" href="mentorlogin.php">Be a mentor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="enroll.php">Enroll</a>
    </li>-->
    <li class="nav-item">
      <a class="nav-link" href="mentorlist.php">Find a mentor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="domain.php">Domains</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Public Forum</a>
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

<div class="dabba1">
<h3 style="color: white">ASK YOUR QUESTIONS HERE</h3>
<input type="text" style="width:30em; height:3em;" id="question" >
<button onclick="send()" class="btn btn-primary" style="margin-left: 1em;height:3em">ASK</button>
<div id=res></div>
<br>
<button class="btn btn-success" onclick="loadqn()">Click here to load Questions</button>
<div style="margin-top:1em;"> </div>
<div id="res2"></div>
</div>
<script>
    function send(){
        var qn=document.getElementById('question').value;
        //console.log(qn);
        var ar1 = {
          question: qn
        };
        $.ajax({
            method: "post",
                    url: "addqn.php",
                    data: ar1,
                    datatype: "html",
                    success: function(response) {
                        $("#res").html(response);
                    }
        });
    }
    function loadqn(){
        $.ajax({
                    url: "displayqn.php",
                    datatype: "html",
                    success: function(response) {
                        $("#res2").html(response);
                    }
        });
    }
</script>
</body>
</html>
<?php 
}
elseif ($_SESSION['login']==1){
    include('db.php');
    $i = 1;
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
      .dabba1{
            text-align: center;
          margin-top: 1em;
    
      }
      </style>
      <link rel = "stylesheet" href = "styleindex.css">
    </head>
    <body class = "bg-dark">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end"><a class="navbar-brand" href="#">
    <img src="images/logo.jpeg" alt="logo" style="width:80px;height:50px"></a>
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
        <!--
        <li class="nav-item">
        <a class="nav-link" href="mentorlist.php">Find a mentor</a>
        </li>-->
        <!--

        <li class="nav-item">
        <a class="nav-link" href="mentorlogin.php">Be a mentor</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="enroll.php">Enroll</a>
        </li>-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Messages
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <a class="dropdown-item bg-dark active" href="#" style="color: white">Follow</a>
            <div class="dropdown-divider bg-light"></div>
            <a class="dropdown-item bg-dark" href="unfollowchat.php" style="color: white">Unfollow</a>
            </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="domain.php">Domains</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="#">Public Forum</a>
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
    
    <div class="dabba1">
    <!--
    <h3 style="color: white">ASK YOUR QUESTIONS HERE</h3>
    <input type="text" style="width:30em; height:3em;" id="question" >
    <button onclick="send()" class="btn btn-primary" style="margin-left: 1em;height:3em">ASK</button>
    <div id=res></div>
    -->
    <br>
    <button class="btn btn-success" onclick="loadqn()">Click here to load Questions</button>
    <div style="margin-top:1em;"> </div>
    <div id="res2"></div>
    </div>
    <script>
    /*
        function send(){
            var qn=document.getElementById('question').value;
            //console.log(qn);
            var ar1 = {
              question: qn
            };
            $.ajax({
                method: "post",
                        url: "addqn.php",
                        data: ar1,
                        datatype: "html",
                        success: function(response) {
                            $("#res").html(response);
                        }
            });
        }
    */
        function loadqn(){
            $.ajax({
                        url: "displayqn.php",
                        datatype: "html",
                        success: function(response) {
                            $("#res2").html(response);
                        }
            });
        }
    </script>
    </body>
    </html>
    <?php } ?>
    <?php } ?>