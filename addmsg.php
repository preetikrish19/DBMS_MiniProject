<?php
session_start();
include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_SESSION['login']==0)
    {
        $_SESSION['display_chat'] = 1;
        $msg = $con->real_escape_string($_POST['msg']);
        $mid = $_SESSION['umid'];
        $sql3 = "SELECT * FROM chat WHERE student_id=$_SESSION[uid] AND mentor_id=$mid ORDER BY time ASC";
        $result3 = mysqli_query($con, $sql3);
        $details3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);

        $sql = "INSERT INTO chat (student_id, mentor_id, sender, receiver, message) VALUES ('$_SESSION[uid]', '$mid', '$_SESSION[uid]', '$mid', '$msg')";
        $result = mysqli_query($con, $sql);
        $sql2 = "SELECT * FROM chat WHERE student_id=$_SESSION[uid] AND mentor_id=$mid ORDER BY chat_id DESC LIMIT 1";
        $result2 = mysqli_query($con, $sql2);
        $details = mysqli_fetch_array($result2, MYSQLI_BOTH);

        
        foreach($details3 as $detail3){
            echo "
            <b>$detail3[sender]</b>
            <div>$detail3[time]</div>
            <div>$detail3[message]</div>";
        }
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

    elseif($_SESSION['login']==1)
    {
        $msg2 = $con->real_escape_string($_POST['msg2']);
        $uid = $_SESSION['muid'];
        $sql4 = "SELECT * FROM chat WHERE student_id=$uid AND mentor_id=$_SESSION[mid] ORDER BY time ASC";
        $result4 = mysqli_query($con, $sql4);
        $details4 = mysqli_fetch_all($result4, MYSQLI_ASSOC);

        $sql5 = "INSERT INTO chat (student_id, mentor_id, sender, receiver, message) VALUES ('$uid', '$_SESSION[mid]', '$_SESSION[mid]', '$uid', '$msg2')";
        $result = mysqli_query($con, $sql5);
        $sql6 = "SELECT * FROM chat WHERE student_id=$uid AND mentor_id=$_SESSION[mid] ORDER BY chat_id DESC LIMIT 1";
        $result2 = mysqli_query($con, $sql6);
        $details = mysqli_fetch_array($result2, MYSQLI_BOTH);

        
        foreach($details4 as $detail4){
            echo "
            <b>$detail4[sender]</b>
            <div>$detail4[time]</div>
            <div>$detail4[message]</div>";
        }
        if($result)
        {
            echo "
            <b>$details[sender]</b>
            <div>$details[time]</div>
            <div>$details[message]</div>";
        }
    }
}
?>