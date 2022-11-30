<html>
<head>
  <title>login</title>
  <script type="text/javascript">
    function validate(){
      uname = document.getElementById("un").value;
      password = document.getElementById("pass").value;
        if (uname == "") {
        alert("user name is blank")
        document.getElementById("un").focus();
        return false;
      }
      if (!uname.match(/^[\W\w]{8,15}$/)) {
        aler("invalid user name")
        document.getElementById("un").focus();
        return false;
      }
      if (password== "") {
        alert("password name is blank")
        document.getElementById("pass").focus();
        return false;
      }
      if(!password.match(/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W_])[\W\w]{8,15}$/)) {
        alert("invalid password")
        document.getElementById("pass").focus();
        return false;
      }
}
  </script>
</head>

<body>
  <center>
  <fieldset style="width: 300px">
  <form method="post" onsubmit="return validate()">
    <table>
      <b> Login page<hr></b>
<tr>
  <td>
                            <a href="signup.html">signup
                            </a>
                        </td>

                    </tr>


      <tr>
        <td>Username</td><td><input type="text" required placeholder="enter username " id="unm" name="uname" ></td>
        
      </tr>
        <tr>
        <td>Password</td><td><input type="password" required placeholder="enter password" id="pnm" name="pname">
</td>
      </tr>
      <tr>
        <td><input type="submit" value="login" name="submited"></td>

                              </tr>
    </table>
  </form>
  </fieldset>
  </center>

</body>

</html>

<?php
session_start();
if(isset($_POST["submited"]))
{
Include 'connecting.php';
$unm=$_POST["uname"];
$pass=$_POST["pname"];
$sql_l= "SELECT * FROM `nameusername` Where username='$unm'";
$rs=mysqli_query($con,$sql_l);
if($result=mysqli_fetch_array($rs))
{

  //echo "password=".$pass."<br>".$result["password"];
  if($result["password"]==$pass)
  {
  //echo "<center><h2>login successfully..</h2></center>";

  $_SESSION["username"]=$unm;
  $_SESSION["email"]=$result["emailid"];
  $_SESSION["start"]=time();
  $_SESSION["end"]=$_SESSION["start"]+60*1;
  header("location:jobportal.php");
}
else
echo "<script>alert('invalid password');</script>";
}
else
echo "<script>alert('invalid username');</script>";
}
?>
