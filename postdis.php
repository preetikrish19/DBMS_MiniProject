<?php
session_start();
include('db.php');
$sql1="SELECT * FROM enrolldetails INNER JOIN follow on
enrolldetails.uid = follow.uid INNER JOIN mentordetails on 
mentordetails.mid = follow.mid INNER JOIN mentorpost on
mentordetails.mid=mentorpost.mentor_id WHERE follow.uid=$_SESSION[uid]";
$query = mysqli_query($con, $sql1);
$ct = mysqli_num_rows($query);
if(!($result1= $con->query($sql1))){ 
  die($con->error);
}
else {
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">           
  <table class="table table-striped">
    <thead>
      <tr>
      <th>S.NO</th>
    <th>MENTOR NAME</th>
    <th>DESCRIPTION</th>
    <th>DOMAIN</th>
    <th>FILENAME</th>
    <th>LIKES</th>
      </tr>
    </thead>
    <?php
   $i=1;
while($row = mysqli_fetch_assoc($result1)){
    $r=$row['Post_id'];
  $d=$row['Domains'];
  if($d==1)
        $dd="DSA";
  if($d==2)
        $dd="C PROGRAMMING";
  if($d==3)
        $dd="DBMS";
  if($d==4)
        $dd="OPERATING SYSTEMS";
  if($d==5)
        $dd="C++";
  if($d==6)
       $dd="PYTHON";
       $sql3="SELECT * FROM likestab WHERE uid=$_SESSION[uid] AND pid=$r";
       $result3= $con->query($sql3);
    while($row3 = mysqli_fetch_assoc($result3)){
    $l=$row3['lk'];
    }
  $sql2="SELECT likes FROM mentorpost WHERE Post_id=$r";
    $result2= $con->query($sql2);
    while($row2 = mysqli_fetch_assoc($result2)){
    $lc=$row2['likes'];
    ?>
    <tbody>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['post_description'];?></td>
    <td><?php echo $dd; ?></td>
    <td><a href="upload/<?php echo $row['file_name'] ?>" target="_blank">CLICK HERE TO VIEW</a></td>
    <td>
    <input type="hidden" value="<?php echo $l;?>" id="l<?php echo $i;?>" name="lk">
    <input type="hidden" value="1" id="lk<?php echo $i;?>" name="lk">
    <input type="hidden" value="<?php echo $row['Post_id'];?>" id="pid<?php echo $i;?>" name="pid">
    <input type="image" height="40" width="45" onclick="im(<?php echo $i;?>);c(<?php echo $i; ?>);vc(<?php echo $i; ?>);"
     src="dislike.png" id="imid<?php echo $i;?>" alt="submit">
    <br>
    <?php echo $lc;?>
    </td>
</tr>
    </tbody>
    <?php } }?>
  </table>
</div>
<script>
$(function() { 
  var ct="<?php echo $ct;?>";
  //alert(ct);
  var i=1;
  while(i<=ct){
  c1(i);
  i++;
  }
});
function c1(i)
 {
   //alert("1st post");
  var a= document.getElementById('l' + i).value;
 //alert(a);
  if ( a == 1 ){
    document.getElementById('imid' + i).src="http://localhost/DBMS_MiniProject/like2.jpg";
    document.getElementById('lk' + i).value=0;
  }
  else
  {
 document.getElementById('imid' + i).src="http://localhost/DBMS_MiniProject/dislike.png";
 document.getElementById('lk' + i).value=1;
    }
 }
function im(i)
{
    if(document.getElementById('imid' + i).src==="http://localhost/DBMS_MiniProject/dislike.png")
        document.getElementById('imid' + i).src="http://localhost/DBMS_MiniProject/like2.jpg";
    else
    document.getElementById('imid' + i).src="http://localhost/DBMS_MiniProject/dislike.png";
}
function vc(i) 
{
    //alert("vc");
    var m1= document.getElementById('lk' + i).value;
    //alert(m1);
    if( m1==1)
        {
           m1= 0;
        }
            else
        {
          m1= 1;
        }
   document.getElementById('lk' + i).value= m1;
     // alert(m1);
      }
function c(i) {
        var lk=document.getElementById('lk' + i).value;
        var pid=document.getElementById('pid' + i).value;
        var arr = {
            lk: lk,
            pid: pid,
        };
        $.ajax({
                method: "post",
                url: "like.php",
                data: arr,
                datatype: "html",
                success: function(response) {
                    $('#res2').html(response);
                }
            });
    }
</script>
</body>
</html>
<?php }
?>