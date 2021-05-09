<?php

include("db.php");

if( isset($_SERVER['REQUEST_METHOD'] === 'POST')){
			session_start();
      $msg = $con->real_escape_string($_POST['message']);
      $sql = "INSERT INTO chat (username, message) VALUES ('Preeti', $_POST['message'])";
      if(mysqli_query($con, $sql))
      {
        echo "New user inserted";
      }
      else{
        echo "Error: " . $sql . "<br>" . $con->error;
      }
}


?>
