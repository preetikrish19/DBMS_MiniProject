<?php
session_start();
if(isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
}

echo '<script>window.location.href="index.php";</script>';