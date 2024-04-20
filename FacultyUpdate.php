<?php

if(isset ($_POST['Submit']))
{
     
    
    $Fname=$_POST['D1'];
    $Fno=$_POST['D2'];
    $Fdesg=$_POST['D3'];
    $Fcontact=$_POST['D4'];
    $Fmail=$_POST['D5'];
    
    
//    echo $Apcode,$Aschdt,$Aautphno;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="update `faculty` set `fn`='$Fname',`fno`='$Fno',`fdg`='$Fdesg',`fcno`='$Fcontact',`fmail`='$Fmail' where `fno`='$Fno'"; 

if(mysql_query($sql,$con))

{

// echo "Record Updated Successfully";
echo "<script>alert('Record Updated');</script>";
echo ("<script LANGUAGE='JavaScript'>window. location. href='FacultyView.php';</script>");
}
else
{
    // echo"Record Not Updated";
    echo "<script>alert('Record not Updated');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='index2.html';</script>");
    
}
}
mysql_close($con);
//header("location:AirbookingsEdit.php");


?>