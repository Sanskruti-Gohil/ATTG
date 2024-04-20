<?php

if(isset ($_POST['Delete']))
{
     
    $Sname=$_POST['D1'];
    $Scode=$_POST['D2'];
    $Ctype=$_POST['D3'];
    $Sem=$_POST['D4'];
    $Dept=$_POST['D5'];
   
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="delete from `subject` where `subject_id`='$Scode'"; 
if(mysql_query($sql,$con))

{

// echo 'Record Deleted Successfully';
echo "<script>alert('Record Deleted');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='SubjectDelete.php';</script>");
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