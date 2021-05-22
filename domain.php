<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connection | Domains</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href = "styleindex.css">
  <body>
  <style>
body {
    background-image: url("images/background.jpeg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<h1 class = "text-white" style = "text-align:center">Domains</h2>
<div class="row">
  <div class="container">

<div class="row">
  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/c ++.png" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">C++ Programming</h4>
      <a href="cplusplus.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
      <input type="hidden" name="op" value="5">
      <input class="btn btn-primary" style="background-color:green;"
       type="submit" value="+ Follow" onclick="return change(this);" />
      </form>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/DSA(1).png" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">DSA</h4>
      <a href="dsa.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
      <input type="hidden" name="op" value="1">
      <input class="btn btn-primary" style="background-color:green;" type="submit"  value="+ Follow" onclick="return change(this);" />
      </form>
    </div>
  </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/dbms.jpg" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">DBMS</h4>
      <a href="dbms.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
      <input type="hidden" name="op" value="3" onclick="return ch(this);">
      <input class="btn btn-primary" style="background-color:green;" 
      type="submit" value="+ Follow" onclick="return change(this);" />
    </form>
    </div>
  </div>
  </div>

</div>

<div class = "row">

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/python.jfif" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">PYTHON</h4>
      <a href="python.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
      <input type="hidden" name="op" value="6">
      <input class="btn btn-primary" style="background-color:green;" type="submit" value="+ Follow" onclick="return change(this);" />
    </form>
    </div>
  </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/c.png" alt="Card image" style="width:100% height:350px">
    <div class="card-body">
      <h4 class="card-title">C programming</h4>
      <a href="cprogramming.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
      <input type="hidden" name="op" value="2">
      <input class="btn btn-primary" style="background-color:green;"
       type="submit"  value="+ Follow" onclick="return change(this);" />
    </form>
    </div>
  </div>
  </div>

  <div class="col-sm-4">
    <div class="card" style="width:335px">
    <img class="card-img-top" src="images/os.jpg" alt="Card image" style="width:100%; height: 350px">
    <div class="card-body">
      <h4 class="card-title">Operating Systems</h4>
      <a href="os.php" class="btn btn-primary">Know more!</a>
      <form action="addfollow.php" method="post">
      <input type="hidden" name="op" value="4">
      <input class="btn btn-primary" style="background-color:green;"
       type="submit" value="+ Follow" onclick="return change(this);" />
      </form>
    </div>
    
  </div>
  </div>

</div>
<br>
<br>
</div>
<script type="text/javascript">
function change( el )
{
    if ( el.value === "+ Follow" )
        el.value = "Unfollow";
    else
        el.value = "+ Follow";
}
function ch(op)
{
  if(op==1)
  op.value=0;
  else 
  op.value=1;
  return op.value;
}
</script>
</body>
</html>
