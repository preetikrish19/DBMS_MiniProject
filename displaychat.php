<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include('db.php');
  if($_SESSION['login']==0){
      $mid = $_POST['mentor_id'];
      $_SESSION['umid'] = $mid;
      $_SESSION['display_chat'] = 0;
      if($_SESSION['display_chat'] == 0){
      //echo $_SESSION['uid'];
      //echo $mid;

      $sql = "SELECT * FROM chat WHERE student_id=$_SESSION[uid] AND mentor_id=$mid ORDER BY time ASC";
      $result = mysqli_query($con, $sql);
      $details = mysqli_fetch_all($result, MYSQLI_ASSOC);

      //SELECT email FROM mentordetails WHERE mid='$mid'
      /*$sql1 = "SELECT * FROM chat WHERE (sender='SELECT email FROM mentordetails WHERE mid=$mid' OR receiver='SELECT email FROM mentordetails WHERE mid=$mid') AND (sender=$_SESSION[student_email] OR receiver=$_SESSION[student_email])";
      if($result1 = mysqli_query($con, $sql1)){
          echo "Hi";
      }*/
      //$details = mysqli_fetch_all($result1, MYSQLI_ASSOC);
      //print_r($details);
      echo "<div id='prechat' style='display:block'>";
      foreach($details as $detail){
      echo "
      <b>$detail[sender_name]</b>
      <div>$detail[time]</div>
      <div>$detail[message]</div>";
      }
      echo "</div>";
    }
      echo "
      <div id='result'></div>
      <form>
      <div class='form-group'>
        <textarea name='msg' class='form-control' id='exampleFormControlTextarea1' rows='1'></textarea>
      </div>
      <button onclick='visibility()' type='submit' name='submit' class='btn btn-dark'>SEND</button>
    </form>";
  }
  else if($_SESSION['login']==1)
  {
      $uid = $_POST['student_id'];
      $_SESSION['muid'] = $uid;
      //$_SESSION['display_chat'] = 0;
      //if($_SESSION['display_chat'] == 0)
      //echo $_SESSION['uid'];
      //echo $mid;

      $sql2 = "SELECT * FROM chat WHERE student_id=$uid AND mentor_id=$_SESSION[mid] ORDER BY chat_id ASC";
      $result2 = mysqli_query($con, $sql2);
      $details2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

      //SELECT email FROM mentordetails WHERE mid='$mid'
      /*$sql1 = "SELECT * FROM chat WHERE (sender='SELECT email FROM mentordetails WHERE mid=$mid' OR receiver='SELECT email FROM mentordetails WHERE mid=$mid') AND (sender=$_SESSION[student_email] OR receiver=$_SESSION[student_email])";
      if($result1 = mysqli_query($con, $sql1)){
          echo "Hi";
      }*/
      //$details = mysqli_fetch_all($result1, MYSQLI_ASSOC);
      //print_r($details);
      echo "<div id='prechatmentor' style='display:block'>";
        foreach($details2 as $detail2){
        echo "
        <b>$detail2[sender_name]</b>
        <div>$detail2[time]</div>
        <div>$detail2[message]</div>";
        }
      echo "</div>";

      echo "
      <div id='result'></div>
      <form>
      <div class='form-group'>
        <textarea name='msg2' class='form-control' id='exampleFormControlTextarea1' rows='1'></textarea>
      </div>
      <button onclick='visibility2()' type='submit' name='submit' class='btn btn-dark'>SEND</button>
    </form>";
    
  }
}
?>
<script>
function visibility() {
       var e = document.getElementById("prechat");
       e.style.display = "none";
  }
  function visibility2() {
       var e = document.getElementById("prechatmentor");
       e.style.display = "none";
  }
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