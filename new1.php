<?php
$con=mysqli_connect("0.0.0.0","root","root","newdb1");
if($con)
echo "<script>alert('connected');</script>";
else
echo "<script>alert('failed');</script>";

if($_POST["execute"])
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
