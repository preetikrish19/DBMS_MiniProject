<?php 
session_start();
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
</head>
<body class="bg-dark">
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
  background: url('images/postbackground.jpg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}
*/
.form{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  padding: 0 20px;
}
.post-form{
  max-width: 550px;
  margin: 0 auto;
  background:rgba(192,192,192,0.3);
  padding: 40px;
  border-radius: 10px;
  display: flex;
  box-shadow: 0 0 10px rgba(192,192,192,0.3);
}
.cars{
  display: flex;
  flex-direction: column;
  margin-right: 5%;
}
.form-control{
  width: 88%;  
}
/*.cars .form-control,*/
.form-control textarea{
   margin: 10px 0;
   background: transparent;
   border: 0;
   border-bottom: 2px solid #c5ecfd;
   padding : 10px;

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
      <a class="nav-link" href="profile.php">Your profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>

<div class ="form">
  <div class="post-form">
   <form action="upload.php" method="post" enctype="multipart/form-data">
   <label for="mid"></label>
    <input type="hidden" name="mid" value="<?php echo $_SESSION['mid'];?>" >
    <br>
    <label for="cars">Choose the domain</label>
    <select id="domains" name="Domains">
        <option value="2">C</option>
        <option value="5">C++</option>
        <option value="6">PYTHON</option>
        <option value="4">OS</option>
        <option value="3">DBMS</option>
        <option value="1">DSA</option>
    </select>
    <br>
    <textarea class="form-control" rows="5" cols="80" placeholder="Post Description" name="post_description" required></textarea>
    <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file" size="50"  />

    <br />

    <input type="submit" class="button" value="Post"/>
    </div>
</div>


</body>
</html>