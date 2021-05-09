<?php
  session_start();
    include("db.php");
    $did = 5;
    $sql = "SELECT * FROM mentordetails WHERE domain='$did'";
    $result = mysqli_query($con, $sql);
    $details = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($details);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>C++ Concepts</title>
</head>
<body>
<style>
body {
  background-image: url(images/cplusplus.jpg);
  background-repeat: no-repeat;
        background-size: cover;
}
</style>
<div class= "container">
  <h1>C++ Concepts</h1>
<p>Concepts are an extension to the templates feature provided by the C++ programming language. Concepts are named Boolean predicates on template parameters, evaluated at compile time. A concept may be associated with a template (class template, function template, or member function of a class template), in which case it serves as a constraint: it limits the set of arguments that are accepted as template parameters.
</div>

<div class="container">
Originally dating back to suggestions for C++11, the original concepts specification has been revised multiple times before now formally being a required part of C++20.
The main uses of concepts are:

1.introducing type-checking to template programming
2.simplified compiler diagnostics for failed template instantiations
3.selecting function template overloads and class template specializations based on type properties
4.constraining automatic type deduction
</div>

<div class="container">
<h2>Roadmap for C++</h2>
(From scratch to to intermediate in just 5 steps)
<br>❏ STEP 1
 While learning a language we should be familiar with some basic syntax of
 input ( cin>> ) and output ( cout<< ).
 After that we should know what are the variables and expressions
 resourse:
 <a href = " http://www.cplusplus.com/reference/iolibrary/ " >http://www.cplusplus.com/reference/iolibrary/</a>
</div>

<div class="container">
<br> ❏ STEP 2
One can learn basic syntax and terminology of c++ from hackerrank (
https://www.hackerrank.com/domains/cpp ) or hackerearth (
https://www.hackerearth.com/practice/basic-programming/input-output/basics-of-i
nput-output/tutorial/ ) or W3schools ( https://www.w3schools.com/cpp/ )
And one of the evergreen resource which everyone should follow is
cpluscplus.com ( http://www.cplusplus.com/doc/tutorial/ )
</div>

<div class="container">
<br>❏ STEP 3
Now after clearing the basic concepts of C++. Now moving forward we should
focus on different types of libraries C++ have.
Here is the list of that libraries with examples (
http://www.cplusplus.com/reference/clibrary/ )
</div>

<div class="container">
<br>❏ STEP 4
Now here is the beauty of language is Containers.
A container is a holder object that stores a collection of other objects (its
elements). They are implemented as class templates, which allows a great
flexibility in the types supported as elements.
There are two types of containers
1) Sequence containers
2) Associative containers
http://www.cplusplus.com/reference/stl/
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
