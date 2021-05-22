<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('db.php');
    $mid = $_POST['mentor_id'];
    $_SESSION['umid'] = $mid;
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
    foreach($details as $detail){
    echo "
    <b>$detail[sender]</b>
    <div>$detail[time]</div>
    <div>$detail[message]</div>";
    }
    echo "
    <div id='result'></div>
    <form>
    <div class='form-group'>
      <textarea name='msg' class='form-control' id='exampleFormControlTextarea1' rows='1'></textarea>
    </div>
    <button type='submit' name='submit' class='btn btn-dark'>SEND</button>
  </form>";
}
?>
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