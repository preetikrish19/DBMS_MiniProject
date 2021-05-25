<?php
session_start();
include "db.php";
$query = "SELECT * FROM mentordetails WHERE display = 1";
$q="SELECT * FROM follow where uid=$_SESSION[uid]";
mysqli_query($con, $q);
//while($rs = mysqli_fetch_assoc($q)){
//$mid=$rs['mid'];
//$uid=$rs['uid'];
//}
echo $_SESSION['login'];
   if(!($result = $con->query($query)))
{
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "styleindex.css">
  
  
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  
  
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
</script>
<body>
 <div class="container" style="margin-top:10px">
   <h1 class = "text-white" style = "text-align:center">Our Mentors</h2>
    <div class="row">
   <?php
   $no=1;
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
        <button onclick="view(<?php echo $row['mid'];?>)" type="button"
        class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">CHAT</button>
        <form action="mentorfollow.php" id="ifm" method="post">
        <input type = "hidden" name ="uid" id="uid<?php echo $no;?>" value = "<?php echo $_SESSION['uid'];?>">
        <input type = "hidden"name="mid" id="mid<?php echo $no;?>" value="<?php echo $row['mid'];?>">
        <button type="submit" name="op" onclick = "change11(<?php echo $no; ?>); cc(<?php echo $no; ?>);"
        id = "btnclick<?php echo $no;?>" class="btn btn-primary" style="background-color:green;" value = "1">+ Follow</button>
        </form>
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
          <input type="hidden" name="mid" value="<?php echo $row['mid'];?>">
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
   
   
   
   
   
   
   // $(function() { 
  //alert("aaaaaaa");
  //newc();
//});
 /*function newc() { 
  var no=1;
  while($row = mysqli_fetch_assoc($result)){
     while($rs = mysqli_fetch_assoc($q)){
        var a="<?php //echo $uid=$rs['uid']; ?>";
        var b="<?php //echo $mid=$rs['mid']; ?>";
        var a1=document.getElementById('uid'+ no).value;
        var b1=document.getElementById('mid'+ no).value;
        alert(a);
        alert(b);
        alert(a1);
        alert(b1);
   if ( a === a1 || b=== b1 )
        s11 = "+ Follow";
    else
        s11= "unfollow";
    document.getElementById('btnclick'+no).innerHTML=s11;
     no++;
     }
  }
  }*/





  
function change11(no) 
{
    var m = document.getElementById('btnclick' + no).innerHTML;
    if ( m=== "+ Follow")
        {
           m= "Unfollow";
           mm = 0;
          }
            else
        {
          m= "+ Follow";
          mm = 1;
        }
   document.getElementById('btnclick' + no).innerHTML = m;
   document.getElementById('btnclick' + no).value= mm;
};
        function cc(no){
        var op=document.getElementById('btnclick' + no).value;
        var uidd=document.getElementById('uid'+ no).value;
        var midd=document.getElementById('mid'+ no).value;
        var ar = {
            mid: midd,
            uid: uidd,
            op:op,
            };
        $.ajax({
                method: "post",
                url: "mentorfollow.php",
                data: ar,
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
