<?php
session_start();
include "db.php";
//$sql1="SELECT mentordetails.mid AS mmid,follow.mid AS fmid,mentordetails.description,mentordetails.name FROM mentordetails
//INNER JOIN follow ON mentordetails.mid = follow.mid where follow.uid=$_SESSION[uid] AND display=1";
//$sql2="SELECT mentordetails.mid AS mmid,follow.mid AS fmid,mentordetails.description,mentordetails.name FROM mentordetails
//LEFT JOIN follow ON mentordetails.mid= follow.mid WHERE follow.uid IS NULL";
$sql1="SELECT mentordetails.mid AS mmid,mentordetails.description,mentordetails.name FROM mentordetails
WHERE mentordetails.mid IN (SELECT mid FROM follow WHERE uid=$_SESSION[uid]) AND mentordetails.display=1";
$sql2="SELECT mentordetails.mid AS mmid,mentordetails.description,mentordetails.name FROM mentordetails
WHERE mentordetails.mid NOT IN (SELECT mid FROM follow WHERE uid=$_SESSION[uid]) AND mentordetails.display=1";
$result2 = $con->query($sql2);
$result1 = $con->query($sql1);
if(!($result2= $con->query($sql2))){ 
  die($con->error);
    }
  else {
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "styleindex.css">

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  
  <style>
  /*
  body {
  background-image: url(images/background.jpeg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  }
  */
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

<script>
  $(document).ready(function(){
    $("form").on("submit", function(event){
            event.preventDefault();
            var formValues= $(this).serialize();
            console.log(formValues);
            $.post("addmsg.php", formValues, function(data){
                // Display the returned data in browser
                $("#result").html(data);
            });
    });
  });
  $(document).ready(function() {
    $('#myinput').keyup(function(){
        search_text($(this).val());
    });

    function search_text(value){
        $('.card ').each(function(){
            var found = 'false';
            $(this).each(function(){
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                {
                    found = 'true';
                }
            });
            if(found == 'true'){
                $(this).show()
            }
            else {
                $(this).hide();
            }
        })
    }
});
</script>
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
      <a class="nav-link active" href="mentorlist.php">Find a mentor</a>
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
 <div class="container" style="margin-top:10px">
  <ul>
    <li>
   <h1 class = "text-white" style = "text-align:center">Our Mentors</h2>
   </h1>
 </li>
    <li>
    <div><input type="text" id="myinput" placeholder="Search Mentor..." class="form-control" /></div>
    </li>
  </ul>
    <div class="row">
   <?php
   $no=1;
   while($row = mysqli_fetch_assoc($result1)){
    $r=$row['mmid'];
    $sql3="SELECT count FROM countfollow where mid=$r";
    $result3 = $con->query($sql3);
    $row3 = mysqli_fetch_array($result3, MYSQLI_BOTH);
     $c=$row3['count'];
   ?>
    <div class="col-sm-4">
      <div class="card" style="width:340px">
      <img class="card-img-top" src="images/person.png" alt="Card image" style="width:100%">
       <div class="card-body">
        <h4 class="card-title"><?php echo $row['name'];?></h4>
        <p class="card-text"><?php echo $row['description'];?></p>
        <p class="card-text"><b><?php echo $c;?> FOLLOWERS</b></p>
        <div class="dabba">
        <ul>
        <li><a href= '#' class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-linkedin"></a></li>
        </ul>
        </div>
        <button onclick="view(<?php echo $row['mmid'];?>)" type="button"
        class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">CHAT</button>
        <!--<form action="mentorfollow.php" id="ifm1" method="post">-->
        <input type = "hidden" name ="uid1" id="uid1<?php echo $no;?>" value = "<?php echo $_SESSION['uid'];?>">
        <input type = "hidden" name="mid1" id="mid1<?php echo $no;?>" value="<?php echo $row['mmid'];?>">        
       <button type="submit" name="op1"
        onclick = "cc1(<?php echo $no; ?>); change11(<?php echo $no; ?>); "
        id = "btnclick1<?php echo $no;?>" class="btn btn-primary" 
        style="background-color:green;" value = "0">Unfollow</button>
       <!-- </form>-->
      </div>
    </div>
  <?php $no++;?>
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
           </button>
      </div>
           <div class="modal-body">
             <div id="result2"></div>
      
      <!--
        <form>
          <input type="hidden" name="mid" value="<?php echo $row['mmid'];?>">
          <div class="form-group">
            <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
          </div>
          <button type="submit" name='submit' class="btn btn-dark">SEND</button>
        </form>
        -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
  <?php
    }
?>

<!--</div>-->
<!--<div class="row">-->
   <?php
   $no=100;
   while($row = mysqli_fetch_assoc($result2)){
    $rr=$row['mmid'];
    $sql4="SELECT count FROM countfollow where mid=$rr";
    $result4 = $con->query($sql4);
    $row4 = mysqli_fetch_array($result4, MYSQLI_BOTH);
     $ct=$row4['count'];
   ?>
    <div class="col-sm-4">
      <div class="card" style="width:340px">
      <img class="card-img-top" src="images/person.png" alt="Card image" style="width:100%">
       <div class="card-body">
        <h4 class="card-title"><?php echo $row['name'];?></h4>
        <p class="card-text"><?php echo $row['description'];?></p>
        <p class="card-text"><b><?php echo $ct;?> FOLLOWERS</b></p>
        <div class="dabba">
        <ul>
        <li><a href= '#' class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-linkedin"></a></li>
        </ul>
        </div>
        <button onclick="view(<?php echo $row['mmid'];?>)" type="button"
        class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">CHAT</button>
        <!--<form action="mentorfollow1.php" id="ifm2" method="post">-->
        <input type = "hidden" name ="uid2" id="uid2<?php echo $no;?>" value = "<?php echo $_SESSION['uid'];?>">
        <input type = "hidden" name="mid2" id="mid2<?php echo $no;?>" value="<?php echo $row['mmid'];?>">
       <button type="submit" name="op2"
        onclick = "cc2(<?php echo $no; ?>);change22(<?php echo $no; ?>);  "
        id = "btnclick2<?php echo $no;?>" class="btn btn-primary" 
        style="background-color:green;" value = "1">+ Follow</button>
       <!-- </form>-->
      </div>
    </div>
  <?php $no++;?>
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
           </button>
      </div>
           <div class="modal-body">
             <div id="result2"></div>
      <!--
        <form>
          <input type="hidden" name="mid" value="<?php echo $row['mmid'];?>">
          <div class="form-group">
            <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
          </div>
          <button type="submit" name='submit' class="btn btn-dark">SEND</button>
        </form>
        -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
  <?php
    }
?>
</div>
</div>
</div>

<script>
    function view(id, email){
        //var id = document.getElementsByClassName('view');
        console.log(id);
        //console.log(email);
        var arr = {
            mentor_id: id,
            mentor_email: email
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

function change11(no) 
{
    var m1= document.getElementById('btnclick1' + no).innerHTML;
    if( m1=== "+ Follow")
        {
           m1= "Unfollow";
        }
            else
        {
          m1= "+ Follow";
        }
        if ( m1=== "+ Follow")
        {
           mm1=1;
          }
            else
        {
          mm1=0;
        }
        document.getElementById('btnclick1' + no).innerHTML=m1;
   document.getElementById('btnclick1' + no).value= mm1;
   }
   function change22(no) 
{
    var m2 = document.getElementById('btnclick2' + no).innerHTML;
    if( m2=== "+ Follow")
        {
           m2= "Unfollow";
        }
            else
        {
          m2= "+ Follow";
        }
        if ( m2=== "+ Follow")
        {
           mm2=1;
          }
            else
        {
          mm2=0;
        }
        document.getElementById('btnclick2' + no).innerHTML=m2;
   document.getElementById('btnclick2' + no).value= mm2;
   }

  function cc2(no) {
        var op2=document.getElementById('btnclick2' + no).value;
        var uidd2=document.getElementById('uid2'+ no).value;
        var midd2=document.getElementById('mid2'+ no).value;
        var ar2 = {
            mid2: midd2,
            uid2: uidd2,
            op2:op2,
            };
        $.ajax({
                method: "post",
                url: "mentorfollow1.php",
                data: ar2,
                datatype: "html",
                success: function(response) {
                    $('#res2').html(response);
                }
            });
      }
    function cc1(no) {
        var op1=document.getElementById('btnclick1' + no).value;
        var uidd1=document.getElementById('uid1'+ no).value;
        var midd1=document.getElementById('mid1'+ no).value;
        var ar1 = {
            mid1: midd1,
            uid1: uidd1,
            op1:op1,
            };
        $.ajax({
                method: "post",
                url: "mentorfollow.php",
                data: ar1,
                datatype: "html",
                success: function(response) {
                    $('#res2').html(response);
                }
            });
     //alert("op   "+ op);
    }
</script>
</body>
</html>
<?php
}?>