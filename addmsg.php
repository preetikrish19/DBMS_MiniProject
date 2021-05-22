<?php
session_start();
include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $con->real_escape_string($_POST['msg']);
    $mid = $_SESSION['umid'];
    $sql = "INSERT INTO chat (student_id, mentor_id, sender, receiver, message) VALUES ('$_SESSION[uid]', '$mid', '$_SESSION[uid]', '$mid', '$msg')";
    $result = mysqli_query($con, $sql);
    $sql2 = "SELECT * FROM chat WHERE student_id=$_SESSION[uid] AND mentor_id=$mid ORDER BY chat_id DESC LIMIT 1";
    $result2 = mysqli_query($con, $sql2);
    $details = mysqli_fetch_array($result2, MYSQLI_BOTH);
    if($result)
    {
        echo "
        <b>$details[sender]</b>
        <div>$details[time]</div>
        <div>$details[message]</div>";
    }
    //echo $msg;
    //echo $mid;
}
?>