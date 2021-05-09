<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="admincss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".login-form").hide();
        $(".login").css("background", "none");

        $(".login").click(function(){
        $(".signup-form").hide();
        $(".login-form").show();
        $(".signup").css("background", "none");
        $(".login").css("background", "#fff");
        });

        $(".signup").click(function(){
        $(".signup-form").show();
        $(".login-form").hide();
        $(".login").css("background", "none");
        $(".signup").css("background", "#fff");
        });

        $(".btn").click(function(){
        $(".input").val("");
      });

      });
    </script>
    <title></title>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        }

        body{
        background: #e9eaea;
        font-family: roboto;
        user-select: none;
        }


        .container{
        width: 600px;
        margin: 30px auto;
        }

        .signup,
        .login{
        width: 50%;
        background: #fff;
        float: left;
        height: 60px;
        line-height: 60px;
        text-align: center;
        cursor: pointer;
        text-transform: uppercase;
        }

        .signup-form{
        background: #fff;
        padding: 40px;
        clear: both;
        width: 100%;
        box-sizing: border-box;
        height: 400px;
        }
        .login-form{
          background: #fff;
          padding: 40px;
          clear: both;
          width: 100%;
          box-sizing: border-box;
          height: 300px;
        }/*
        .input{
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        margin-bottom: 25px;
        border: 2px solid #e9eaea;
        color: #3e3e40;
        font-size: 14px;
        outline: none;

        }


        .input:focus{
        border: 2px solid #34b3a0;
        }*/

        .btn{
        width: 100%;
        background: #34b3a0;
        height: 60px;
        text-align: center;
        line-height: 60px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        letter-spacing: 1px;
        cursor: pointer;
        margin-bottom: 30px;
        }

        span a{
        text-decoration: none;
        color: #000;
        }

        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        color: #3e3e40;
        font-family: roboto;
        }
        ::-moz-placeholder { /* Firefox 19+ */
        color: #3e3e40;
        font-family: roboto;
        }
        :-ms-input-placeholder { /* IE 10+ */
        color: #3e3e40;
        font-family: roboto;
        }
        :-moz-placeholder { /* Firefox 18- */
        color: #3e3e40;
        font-family: roboto;
        }
        .null{
          height: 100px;
        }
    </style>
  </head>
  <body id="mentorlogin">
    <div class="null">

    </div>
    <div class="container">
    <div class="container">

      <div class="signup">Sign Up</div>
      <div class="login">Log In</div>
      <form id = "signup" action="enrolldetails.php" method = "post" class="signup-form form-group">
    <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="year" placeholder="Year of study" name="year" required>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
    </div>
    <div class="form-group">
      <input type="varchar" class="form-control" id="department" placeholder="Department" name="department" required>
    </div>
    <button type="submit" name = "submit" value = "submit" class="btn btn-primary">Submit</button>
  </form>
     <form id="login" action="enrollcheck.php" method="post" class="login-form form-group">
     <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
  </div>
  </body>
</html>
