<?php

if(isset ($_POST['Delete']))
{
     
    $Fname=$_POST['D1'];
    $Fno=$_POST['D2'];
    $Fdesg=$_POST['D3'];
    $Fcontact=$_POST['D4'];
    $Fmail=$_POST['D5'];
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="delete from `faculty` where `fno`='$Fno'"; 
if(mysql_query($sql,$con))

{

// echo 'Record Deleted Successfully';
echo "<script>alert('Record Deleted');</script>";
echo ("<script LANGUAGE='JavaScript'>window. location. href='FacultyDelete.php';</script>");
}
else
{
    // echo"Record Not Deleted";
    echo "<script>alert('Record not Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
}
}
mysql_close($con);
//header("location:AirbookingsDelete.php");


?>