<?php
session_start();
  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    include('db.php');
    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);
    $sql1= "SELECT * FROM mentordetails WHERE email='$email' AND password='$password'";
    $result= $con->query($sql1);
    $details = mysqli_fetch_array($result, MYSQLI_BOTH);
    $_SESSION['mid'] = $details['mid'];
    $_SESSION['name'] = $details['name'];
    //echo $_SESSION['mid'];
    $count = $result->num_rows;
    if($count == 1){
      $_SESSION["mentor_email"] = $email;
      $_SESSION['login'] = 1;

      echo "<script>window.location.href='index.php'</script>";
    }
    else {
      echo "Invalid username or password";
    }
  }
?>
