<?php
$link=mysqli_connect("localhost","root","","bakkery");
if($link == false)
{
die ("ERROR: Could not connect.". mysqli_connect_error());
}
$sql1 = "INSERT INTO myacc1(fname,lname,DOB,Email,Password)
VALUES('$_POST[fname]','$_POST[lname]','$_POST[DOB]','$_POST[Email]','$_POST[Password]')";
if (mysqli_query($link, $sql1))
{
 echo "Account created succesfully";
}
else {
echo "Error". mysqli_error($link);
}
mysqli_close($link);
?>