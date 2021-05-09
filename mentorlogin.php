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
        $("#signup").on("submit", function(event){
            event.preventDefault();

            var formValues= $(this).serialize();
            console.log(formValues);

            $.post("mentordetails.php", formValues, function(data){
                // Display the returned data in browser
                $("#result1").html(data);
            });
        });
        $("#login").on("submit", function(event){
            event.preventDefault();

            var formValues= $(this).serialize();
            console.log(formValues);

            $.post("mentorcheck.php", formValues, function(data){
                // Display the returned data in browser
                $("#result2").html(data);
            });
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
        height: 780px;
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
          height: 60px;
        }
    </style>
  </head>
  <body id="mentorlogin">
    <div class="null">

    </div>
    <div class="wrapper">
    <div class="container">

      <div class="signup">Sign Up</div>
      <div class="login">Log In</div>
      <form id="signup" action="mentordetails.php" method="post" class="signup-form form-group">
       <!--<div class="signup-form">-->
          <input type="text" placeholder="Email"  class="form-control" name="email" required><br />
          <input type="text" placeholder="Name" class="form-control" name="name" required><br />
          <input type="password" placeholder="Password" class="form-control" name="password" required><br/>
          <input type="number" min="1" max="4" placeholder="Year" name="year" class="form-control" required><br />
          <label for="domain" class="form-control">Please select your domain</label>
          <input type="radio" name="domain" value="1" class="">
          <label for="DSA">DSA</label><br>
          <input type="radio" name="domain" value="2" class="">
          <label for="c">C programming</label><br>
          <input type="radio" name="domain" value="3" class="">
          <label for="dbms">DBMS</label><br>
          <input type="radio" name="domain" value="4" class="">
          <label for="os">OS</label><br>
          <input type="radio" name="domain" value="5" class="">
          <label for="c++">C++</label><br>
          <input type="radio" name="domain" value="6" class="">
          <label for="python">Python</label><br>
          <textarea class="form-control" rows="5" cols="80" placeholder="Acheivements Description" name="description" required></textarea><br>
          <button type="submit" class="btn btn-primary">Submit</button>
          <div id="result1"></div>
     </form>
     <form id="login" action="mentorcheck.php" method="post" class="login-form form-group">
          <input type="text" placeholder="Email" name="email" class="form-control"><br />
          <input type="password" placeholder="Password" name="password" class="form-control"><br />
          <button type="submit" class="btn btn-primary">Submit</button>
          <div id="result2" style="color:red;"></div>
     </form>
    </div>
  </div>
  </body>
</html>
