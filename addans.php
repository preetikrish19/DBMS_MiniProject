<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']==0){
        include('db.php');
        $ans = $con->real_escape_string($_POST['answer']);
        $qid = $_POST['qid'];
        $sql = "INSERT INTO answers (qid, answer, user_id, login_type) VALUES ('$qid' ,'$ans' ,'$_SESSION[uid]', '$_SESSION[login]')";
        if(mysqli_query($con, $sql))
        {
            echo "<script>alert('Answer added')</script>";
        }  
    }
    elseif($_SESSION['login']==1){
        include('db.php');
        $ans = $con->real_escape_string($_POST['answer']);
        $qid = $_POST['qid'];
        $sql = "INSERT INTO answers (qid, answer, user_id, login_type) VALUES ('$qid' ,'$ans' ,'$_SESSION[mid]', '$_SESSION[login]')";
        if(mysqli_query($con, $sql))
        {
            echo "<script>alert('Answer added')</script>";
        } 
    }  
}
?>