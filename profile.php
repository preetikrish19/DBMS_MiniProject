
<form action="updateform.php" method="post" enctype="multipart/form-data">
<div class ="form">

  <div class="post-form">
  <input type="text" placeholder="Update Name" name="name"><br />
 
  <input type="hidden" name="domain" value="0">
  <label for="cars">Choose the domain</label>
          <input type="checkbox" name="domain" value="1" class="">
          <label for="DSA">DSA</label><br>

          <input type="hidden" name="choice2" value="0">
          <input type="checkbox" name="choice2" value="2" class="">
          <label for="c">C programming</label><br>

          <input type="hidden" name="choice3" value="0">
          <input type="checkbox" name="choice3" value="3" class="">
          <label for="dbms">DBMS</label><br>

          <input type="hidden" name="choice4" value="0">
          <input type="checkbox" name="choice4" value="4" class="">
          <label for="os">OS</label><br>

          <input type="hidden" name="choice5" value="0">
          <input type="checkbox" name="choice5" value="5" class="">
          <label for="os"></label>C++<br>

          <input type="hidden" name="choice6" value="0">
          <input type="checkbox" name="choice6" value="6" class="">
          <label for="os"></label>Python<br> 
    
    <!--<label for="cars">Choose the domain</label>
    <select id="domains" name="Domains">
        <option value="2">C</option>
        <option value="5">C++</option>
        <option value="6">PYTHON</option>
        <option value="4">OS</option>
        <option value="3">DBMS</option>
        <option value="1">DSA</option>
    </select>-->
    <br> 
    <textarea rows="5" cols="80" placeholder="Update Acheivements" name="description" ></textarea><br/>
    <input type="submit" class="button" value="Update"/><br/>

   
    <!--<input type="submit" class="button" value="followers"/><br/> -->
    </div>
</form>
<br/>
<?php
echo "POSTS","<br>";
session_start();
include('db.php');
$mentor_id = $_SESSION['mid'];
$sql1 = "SELECT * FROM mentorpost WHERE mentor_id ='$mentor_id';";
 $result = mysqli_query($con,$sql1);
 $resultcheck = mysqli_num_rows($result);
 if($resultcheck > 0){
   while($row = mysqli_fetch_assoc($result)){
        echo $row['file_name'], "<br>";
   }
  }
   ?>


