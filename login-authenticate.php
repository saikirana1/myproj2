<?php
$u=$_POST["t1"];
$p=$_POST["t2"];
$con=mysqli_connect("localhost","root","","regtable");
echo "connected sucessfully";
$q="select username,password from register where username='$u' and password='$p'";
$res=mysqli_query($con,$q);
if(($row=mysqli_fetch_array($res))!=NULL)
{
echo "<h1 style='color:green;'>Login Successfull!!!!!!!!!!!!!!!!!!</h1>";
}
else
{
echo "<h1 style='color:red;'>Login UnSuccessfull</h1>";
}
mysqli_close($con);
?>
