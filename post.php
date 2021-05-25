<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
<label for="fname">Mentor Name:</label>
<input type="text" id="fname" name="fname">
<br>
<input type="hidden" name="Mid" value="<?php echo $_SESSION['mid'];?>">
<br>
<label for="cars">Choose the domain</label>
<select id="domains" name="Domains">
  <option value="C">C</option>
  <option value="C++">C++</option>
  <option value="PYTHON">PYTHON</option>
  <option value="OS">OS</option>
</select>
<br>
<form action="upload.php" method="post" enctype="multipart/form-data">

<input type="file" name="file" size="50" />

<br />

<input type="submit" value="Post" />

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