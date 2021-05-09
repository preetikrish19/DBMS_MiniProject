<?php
  session_start();
    include("db.php");
    $did = 1;
    $sql = "SELECT * FROM mentordetails WHERE domain='$did'";
    $result = mysqli_query($con, $sql);
    $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($details);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Structures and Algorithms </title>
</head>
<body>
  <h1>Data Structures and Algorithms</h1>
  <style>
body {
  background-image: url(images/cplusplus.jpg);
  background-repeat: no-repeat;
        background-size: cover;
}
</style>
  <div class="container">
<p>Data Structures are the programmatic way of storing data so that data can be used efficiently. Almost every enterprise application uses various types of data structures in one or the other way. This tutorial will give you a great understanding on Data Structures needed to understand the complexity of enterprise level applications and need of algorithms, and data structures.

Why to Learn Data Structure and Algorithms?
As applications are getting complex and data rich, there are three common problems that applications face now-a-days.

Data Search − Consider an inventory of 1 million(106) items of a store. If the application is to search an item, it has to search an item in 1 million(106) items every time slowing down the search. As data grows, search will become slower.

Processor speed − Processor speed although being very high, falls limited if the data grows to billion records.

Multiple requests − As thousands of users can search data simultaneously on a web server, even the fast server fails while searching the data.

To solve the above-mentioned problems, data structures come to rescue. Data can be organized in a data structure in such a way that all items may not be required to be searched, and the required data can be searched almost instantly
<br>What is Data Structure?
<br>Basic Concept in Data Structures.
<br>1: Stack
<br>Stack using Array
<br>Stack using list
<br>Stack using Queue
<br>2: Queue
<br>Queue using Array
<br>Queue using Stacks
<br>Queue using list
<br>3: Linked list
<br>Linked list using singly
<br>Linked list using doubly
<br>Linked list using Circular
<h1>Roadmap for DSA</h1>
<br>step1
<br>step2
<br>so on...
<h1>YOUTUBE CHANNELS TO FOLLOW </h1>
<br>mycodeschool
<br>leetcode
<br>so on..
</p>
<div class="dabba" style="margin-top:5px;">
<h1 class = "text-white" style = "text-align:center">Our Mentors</h2>
<div class="row">
<?php
foreach($details as $detail){
?>
<div class="col-sm-4">
  <div class="card" style="width:340px">
  <img class="card-img-top" src="images/person.png" alt="Card image" style="width:100%">
  <div class="card-body">
    <h4 class="card-title" style="color:black;"><?php echo $detail['name'];?></h4>
    <p class="card-text" style="color:black;"><?php echo $detail['description'];?></p>

    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
<?php
  }
?>
</div>
</div>
</div>
<br>
<div id="footer">

 <?php
   include('footer.php')
 ?>
 </div>

</body>
</html>
