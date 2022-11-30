<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sign up</title>
  <script type"text/javaScript">
    function validate(){
      var name, uname;
      name = document.getElementById("nm").value;
      uname = document.getElementById("un").value;
      password = document.getElementById("pass").value;
      email=document.getElementById("emailid").value;
      mobile = document.getElementById("mn").value;
      panno= document.getElementById("pan").value;
      


      if (name == "") {
        alert("name is blank")
        document.getElementById("nm").focus();
        return false;
      }
      if (!name.match(/^[A-Za-z\s]+$/)) {
        alert("invalid name")
        document.getElementById("nm").focus();
        return false;
      }
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
      if (mobile == "") {
        alert("mobile no is blank")
        document.getElementById("mn").focus();
        return false;
      }
      if (!mobile.match(/^[0-9]{10}$/)) {
        alert("invalid mobile no")
        document.getElementById("mn").focus();
        return false;
      }
      if (panno == "") {
        alert("pan no is blank")
        document.getElementById("pan").focus();
        return false;
      }
      if (!panno.match(/^[0-9A-Za-z]{8,10}$/)) {
        alert("invalid Pan no")
        document.getElementById("pan").focus();
        return false;
      }
      
    }
  </script>
</head>

<body>
  <form method="post"  onsubmit="return validate();">
    <center>
    <fieldset style="width: 300px">
  <table>
    <tr><td>name</td><td><input type="text" placeholder="enter name " name="name" id="nm"></td></tr>
    
    <tr><td>Username</td><td><input type="text"   placeholder="enter username "name="uname" id="un"></td></tr>
    
  <tr><td>Password</td><td><input type="password"   placeholder="enter password" name="pname" id="pass"></td></tr>

 <tr><td>Email</td><td><input type="email"   placeholder="enter email" name="emailid" id="emailid"></td></tr>
  
    <tr><td>Mobile</td><td><input type="text" placeholder="enter mobile number" name="mobile" id="mn"></td></tr>
    
    <tr><td>pan</td><td><input type="text"  name="pann" placeholder="enter pan no " id="pan"></td></tr>
    
    <tr><td><input type="submit" name="submit" value="SignUp"></td></tr>

  </table>
  </fieldset>
    </center>
  </form>
</body>

</html>
<?php
if(isset($_POST["submit"])) {
     // code...
     $nm=$_POST["name"];
     $unm=$_POST["uname"];
     $pnm=$_POST["pname"];
     $email=$_POST["emailid"];
     $mob=$_POST["mobile"];
     $pan=$_POST["pann"];
    ?>
<center>
<table border="2px">
<tr><td>Name</td><td><?php echo $nm; ?></td></tr>
<tr><td>username</td><td><?php echo $unm; ?></td></tr>
<tr><td>password</td><td><?php echo $pnm; ?></td></tr>

<tr><td>email</td><td><?php echo $email; ?></td></tr>
<tr><td>mobile</td><td><?php echo $mob; ?></td></tr>
<tr><td>Pan</td><td><?php echo $pan; ?></td></tr>
</table>
</center>
<?php
}
?>