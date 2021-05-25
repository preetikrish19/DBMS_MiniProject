<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['student_id'];
      $_SESSION['muid'] = $uid;
      $_SESSION['display_chat'] = 0;
      //if($_SESSION['display_chat'] == 0)
      //echo $_SESSION['uid'];
      //echo $mid;

      $sql2 = "SELECT * FROM chat WHERE student_id=$_SESSION[uid] AND mentor_id=$mid ORDER BY time ASC";
      $result2 = mysqli_query($con, $sql2);
      $details2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

      //SELECT email FROM mentordetails WHERE mid='$mid'
      /*$sql1 = "SELECT * FROM chat WHERE (sender='SELECT email FROM mentordetails WHERE mid=$mid' OR receiver='SELECT email FROM mentordetails WHERE mid=$mid') AND (sender=$_SESSION[student_email] OR receiver=$_SESSION[student_email])";
      if($result1 = mysqli_query($con, $sql1)){
          echo "Hi";
      }*/
      //$details = mysqli_fetch_all($result1, MYSQLI_ASSOC);
      //print_r($details);
      //echo "<div id='prechatmentor' style='display:block'>";
      foreach($details2 as $detail2){
      echo "
      <b>$detail2[sender]</b>
      <div>$detail2[time]</div>
      <div>$detail2[message]</div>";
    }
?>