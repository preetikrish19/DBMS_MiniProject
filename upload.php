<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  include('db.php');
  $mentor_id = $_POST['mid'];
  $post_description = $con->real_escape_string($_POST['post_description']);
  $domains = $con->real_escape_string($_POST['Domains']); 
  $file_name = $_FILES['file']['name'];



  /*echo $mid;
  echo $post_description;
  echo $domains; */
  

 $targetfolder = "upload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}

$sql = "INSERT INTO mentorpost (mentor_id,post_description,Domains,file_name) VALUES ('$mentor_id','$post_description','$domains','$file_name')";
  if(mysqli_query($con, $sql))
  {
    echo "posted";
    echo "<script>window.location.href='index.php'</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . $con->error;
  }

}


?>