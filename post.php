<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Oswald', sans-serif;
}
body{
  background: url('images/postbackground.jpg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}
.form{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  padding: 0 20px;
}
.post-form{
  max-width: 550px;
  margin: 0 auto;
  background:rgba(192,192,192,0.3);
  padding: 40px;
  border-radius: 10px;
  display: flex;
  box-shadow: 0 0 10px rgba(192,192,192,0.3);
}
.cars{
  display: flex;
  flex-direction: column;
  margin-right: 5%;
}
.form-control{
  width: 88%;  
}
/*.cars .form-control,*/
.form-control textarea{
   margin: 10px 0;
   background: transparent;
   border: 0;
   border-bottom: 2px solid #c5ecfd;
   padding : 10px;

}
.button{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<div class ="form">
  <div class="post-form">
   <form action="upload.php" method="post" enctype="multipart/form-data">
   <label for="mid"></label>
    <input type="hidden" name="mid" value="<?php echo $_SESSION['mid'];?>" >
    <br>
    <label for="cars">Choose the domain</label>
    <select id="domains" name="Domains">
        <option value="2">C</option>
        <option value="5">C++</option>
        <option value="6">PYTHON</option>
        <option value="4">OS</option>
        <option value="3">DBMS</option>
        <option value="1">DSA</option>
    </select>
    <br>
    <textarea class="form-control" rows="5" cols="80" placeholder="Post Description" name="post_description" required></textarea>
    <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file" size="50"  />

    <br />

    <input type="submit" class="button" value="Post"/>
    </div>
</div>
</form>
  <!--Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  Select file to upload:
  <p><input type="hidden" name="MAX_FILE_SIZE" value="200000" /> <input
	type="file" name="pdfFile" /><br />
<input type="submit">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Mentor Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Mentor Id</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div> -->

</form>

</body>
</html>