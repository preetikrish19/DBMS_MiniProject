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
    <button onclick="view(<?php echo $row['mid'];?>)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">CHAT</button>
      <a href="#" class="btn btn-primary">FOLLOW</a>
    </div>
  </div>
  </div>

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

</script>

</body>
</html>
<?php
}?>
