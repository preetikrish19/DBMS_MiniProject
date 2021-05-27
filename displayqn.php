<?php
include('db.php'); 
$sql = "SELECT * FROM question";
$result = mysqli_query($con, $sql);
$details =  mysqli_fetch_all($result, MYSQLI_ASSOC);
$i=1;
//print_r($details);
echo"
<table class='table table-dark' style='width:50em;margin-left: auto;margin-right: auto;'>
  <thead>
    <tr>
      <th scope='col'>Sno</th>
      <th scope='col'>Questions</th>
      <th scope='col'>Answers</th>
    </tr>
  </thead>";
  foreach($details as $detail){
echo"
  <tbody>
    <tr>
      <th scope='row'>$i</th>
      <td>$detail[question]</td>
      <td><a href='displayanswer.php?question_id=$detail[qid]'><button type='button' class='btn btn-primary'>
      View 
    </button></a></td>
    </tr>    
  </tbody>
  ";
  $i++;
  }
echo "</table>";
?>
<script>
/*
function answerdisplay(qid){
    var qnid =  qid;
    console.log(qnid);
    var ar1 = {
          question_id: qnid
        };
        $.({
            method: "post",
                    url: "displayanswer.php",
                    data: ar1
        });
}
*/
</script>
