<?php 
    include('db.php');
    $qid = $_GET['question_id']; 
    //echo $qid;
    $sql1 = "SELECT * FROM question WHERE qid=$qid";
    $result1= mysqli_query($con, $sql1);
    $details1 = mysqli_fetch_array($result1, MYSQLI_BOTH);

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
<h3 style="color: white"><?php echo $details1['question'];?></h3>
<input type="text" style="width:30em; height:3em;" id="answer" >
<button onclick="send(<?php echo $qid;?>)" class="btn btn-primary" style="margin-left: 1em;height:3em">ANSWER</button>
<div id="res"></div>
<br>
</div>
<script>
function send(qid){
        var ans=document.getElementById('answer').value;
        //console.log(qn);
        var ar1 = {
          answer: ans,
          qid: qid
        };
        $.ajax({
            method: "post",
                    url: "addans.php",
                    data: ar1,
                    datatype: "html",
                    success: function(response) {
                        $("#res").html(response);
                    }
        });
    }
</script>
</body>
</html>
