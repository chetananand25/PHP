<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <center>
        <form action="" method="post" onetype="multiple-part/Form-data">
            <table>
                <tr>
                    <td>
                        Select Your Image
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="myfile">

                    </td>
                    <td>
                        <input type="submit" name="upload">
                    </td>
                </tr>
            </table>

        </form>
    </center>
</body>
</html>
<?php
if(isset($_POST["upload"])) {
    $fname=$_FILES["myfile"]["name"];
    $fsize=round($_FILES["myfile"]["size"]/1024);
    $ftype=$_FILES["myfile"]["type"];
    $ftemp=$_FILES["myfile"]["tmp_name"]; 
    echo"<center><table>
    <tr><td>file name</td><td>".$fname."</td></tr>
    <tr><td>file size</td><td>".$fize."kb</td></tr>
    <tr><td>file type</td> <td>".$ftype."</td></tr>
    <tr><td>tempory file</td><td>".$ftemp."</td></tr>
    </table></center>;
    move_uploaded_file($ftemp,"uploads/".$fname);
}
?>