<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include('db.php');
  $email = $con->real_escape_string($_POST['email']);
  $name = $con->real_escape_string($_POST['name']);
  $password = $con->real_escape_string($_POST['password']);
  $year = $con->real_escape_string($_POST['year']);
  $domain = $con->real_escape_string($_POST['domain']);
  $choice2 = $con->real_escape_string($_POST['choice2']);
  $choice3 = $con->real_escape_string($_POST['choice3']);
  $choice4 = $con->real_escape_string($_POST['choice4']);
  $choice5 = $con->real_escape_string($_POST['choice5']);
  $choice6 = $con->real_escape_string($_POST['choice6']);
  $description = $con->real_escape_string($_POST['description']);
  $_SESSION['email']=$email;
  $_SESSION['login'] = 1;
  $email = stripcslashes($email);
  $name = stripcslashes($name);
  $password = stripcslashes($password);
  $year = stripcslashes($year);
  $domain = stripcslashes($domain);
  $choice2 = stripcslashes($choice2);
  $choice3 = stripcslashes($choice3);
  $choice4 = stripcslashes($choice4);
  $choice5 = stripcslashes($choice5);
  $choice6 = stripcslashes($choice6);
  $description = stripcslashes($description);
  $sql = "INSERT INTO mentordetails (email, name, password, year, domain, choice2, choice3, choice4, choice5, choice6, description) VALUES ('$email', '$name', '$password', '$year', '$domain', '$choice2', '$choice3', '$choice4', '$choice5', '$choice6', '$description')";
  $sql1 = "INSERT INTO user (username, mentoremail) VALUES ('$name', '$email')";
  if(mysqli_query($con, $sql))
  {
    echo "New user inserted";
    //echo "<script>window.location.href='index.php'</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>
