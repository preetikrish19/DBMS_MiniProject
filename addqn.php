<?php
session_start();
if(isset($_SESSION['login'])){
    include('db.php');
    $qn = $con->real_escape_string($_POST['question']);
    $sql = "INSERT INTO question (user_id, question) VALUES ('$_SESSION[uid]', '$qn')";
    if(mysqli_query($con, $sql))
    {
        echo "<script>alert('Question added')</script>";
    }    
}
?>