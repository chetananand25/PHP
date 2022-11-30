<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SQL EDITOR</title>
</head>

<body>
<center>
<form method="post">
  <table>
    <tr>
      <td>Enter SQL command</td>
    </tr>
    <tr>
      <td><textarea rows="4" cols="40" name="editor_box"></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" name="execute" value="RUN"></td>
    </tr>
  </table>
</form>
</center>
</body>
</html>
<?php
$con=mysqli_connect("0.0.0.0","root","root","newdb1");
if($con)
echo "<script>alert('connected');</script>";
else
echo "<script>alert('failed');</script>";

if(isset($_POST["execute"]))
{
$sql=$_POST["editor_box"];
$rs=mysqli_query($con,$sql);
if($rs)
echo "<script>alert('Execute success');</script>";
else
echo "<script>alert('Erorr');</script>";
mysqli_close($con);


}
?>