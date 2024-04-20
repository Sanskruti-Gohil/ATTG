<?php

if(isset ($_POST['Delete']))
{
     
    $Id=$_POST['D1'];
    $Stname=$_POST['D2'];
    $Ndname=$_POST['D3'];
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="delete from `timeslots` where `id`='$Id'"; 
if(mysql_query($sql,$con))

{

// echo 'Record Deleted Successfully';
echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='TimeslotDelete.php';</script>");
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