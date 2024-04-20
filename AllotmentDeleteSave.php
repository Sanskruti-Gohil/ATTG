<?php

if(isset ($_POST['Delete']))
{
     
    $Theory=$_POST['D1'];
    $Classroom=$_POST['D3'];
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="delete from `allotment` where `cr`='$Classroom'"; 
if(mysql_query($sql,$con))

{

// echo 'Record Deleted Successfully';
echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='AllotmentDelete.php';</script>");
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