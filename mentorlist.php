<?php
include "db.php";
$query = "SELECT * FROM mentordetails WHERE display = 1";
if(!($result = $con->query($query))){
    die($con->error);
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connection | Mentors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "styleindex.css">
  <style>
  body {
  background-image: url(images/background.jpeg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  }
  ul li{
    display: inline;
    margin-right: 5px;
  }
  .fa{
    padding: 7px;

  }
  .fa {
    background: black;
    color: white;
  }
  .dabba{

    text-align: center;
  }
</style>
  <body>
  <div class="container" style="margin-top:10px">
<h1 class = "text-white" style = "text-align:center">Our Mentors</h2>
<div class="row">
<?php
    while($row = mysqli_fetch_assoc($result)){
?>
  <div class="col-sm-4">
    <div class="card" style="width:340px">
    <img class="card-img-top" src="images/person.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $row['name'];?></h4>
      <p class="card-text"><?php echo $row['description'];?></p>
      <div class="dabba">
      <ul>
      <li><a href= '#' class="fa fa-facebook"></a></li>
      <li><a href="#" class="fa fa-instagram"></a></li>
      <li><a href="#" class="fa fa-twitter"></a></li>
      <li><a href="#" class="fa fa-linkedin"></a></li>
      </ul>
    </div>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  </div>
  <?php
    }
?>
</div>
</div>

</body>
</html>
<?php
}?>
