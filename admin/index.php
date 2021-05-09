<?php
session_start();
if(isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == 1) {
        echo '<script>window.location.href="console.php";</script>';
    }
}else {
    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="admincss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $("form").on("submit", function(event){
            event.preventDefault();

            var formValues= $(this).serialize();
            console.log(formValues);

            $.post("adminverify.php", formValues, function(data){
                // Display the returned data in browser
                $("#result").html(data);
            });
        });
    });
    </script>
    <title></title>
  </head>
  <body>
    <div class="dabba">
      <h3>Admin Access</h3>
      <form action="adminacc.php" method="post">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <div id="result" style="color: red;"></div>
      </form>
    </div>
</div>
  </body>
</html>
    <?php

}
?>