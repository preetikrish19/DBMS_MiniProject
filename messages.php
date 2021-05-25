<?php 
session_start();
if(isset($_SESSION['login'])){
//echo $_SESSION['login'];
//echo $_SESSION['mid'];
include('db.php');
$i=1;
$sql = "SELECT DISTINCT follow.uid, enrolldetails.name, enrolldetails.year, enrolldetails.email FROM follow INNER JOIN chat ON chat.student_id=follow.uid INNER JOIN enrolldetails ON chat.student_id=enrolldetails.uid  WHERE follow.mid=$_SESSION[mid]";
//$sql = "SELECT chatfollow.uid, enrolldetails.name, enrolldetails.email, enrolldetails.year FROM chatfollow INNER JOIN enrolldetails ON chatfollow.uid=enrolldetails.uid WHERE chat.mentor_id=3";
$sql2 = "SELECT e.uid, e.name,e.email,e.year from enrolldetails e WHERE e.uid NOT IN( SELECT DISTINCT f.uid FROM follow f)";
$result2 = mysqli_query($con, $sql2);
$result = mysqli_query($con, $sql);
$details = mysqli_fetch_all($result, MYSQLI_ASSOC);
$details2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
//print_r($details);
echo "  ";
//echo $_SESSION['mid'];chat.mentor_id, chat.student_id, follow.mid,
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
      <a class="nav-link" href="index.php#footer">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
  </div>
</nav>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Year</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <?php foreach($details as $detail){ ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $detail['name']; ?></td>
      <td><?php echo $detail['email']; ?></td>
      <td><?php echo $detail['year']; ?></td>
      <td><button onclick="view(<?php echo $detail['uid'];?>)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View</button></td>
    </tr>
  </tbody>
  <!--<?php echo $detail['uid'];?>-->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $detail['name']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="result2"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <?php $i=$i+1; }?>
</table>
<script>
function view(id){
        //var id = document.getElementsByClassName('view');
        console.log(id);
        //console.log(email);
        var arr = {
            student_id: id
        };
        $.ajax({
                method: "post",
                url: "displaychat.php",
                data: arr,
                datatype: "html",
                success: function(response) {
                    $('#result2').html(response);
                }
            });
        //alert("heyy");
    }
</script>
</body>
</html>
<?php }?>