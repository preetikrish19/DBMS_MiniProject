<?php
session_start();
if(isset($_SESSION['admin'])){
    if($_SESSION['admin']==1){
       ?>
<!DOCTYPE html>
<html>
<?php
include "../db.php";
$query = "SELECT * FROM mentordetails";
if(!($result = $con->query($query))){
    die($con->error);
}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-dark">
    <h2 class = "text-white" style = "margin-left:600px">Admin Console</h2>
    <a class="btn btn-danger" href="logout.php" style = "margin-left:560px">Logout</a>
</nav>
<table class="table table-dark table-striped">
    <thead>
    <br>
    <tr>
        <th>S no</th>
        <th>Mid</th>
        <th>Email</th>
        <th>Name</th>
        <th>Password</th>
        <th>Year</th>
        <th>Domain</th>
        <th>Description</th>
        <th>Display(1-Display,0-Hide)</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['mid'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['year'];?></td>
            <td><?php echo $row['domain'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><form action = "result.php" method = "post">
                <input type = "hidden" name = "mid" value ="<?php echo $row['mid'];?>">
                <input type = "text" name = "select" value ="<?php echo $row['display'];?>">
                <td><button type="submit" class="btn btn-warning" name = "view">Update</button></td>
            </form>
        </tr>
        <?php
        $i++;
    }
    ?>
    </tbody>
</table>
</body>
</html>

        <?php
    }else {
        echo '<script>alert("Accessed denied");</script>';
        header('location: index.php');
    }
}else {
    echo '<script>alert("Accessed denied");</script>';
    header('location: index.php');
}
?>