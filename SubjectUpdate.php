<?php

if(isset ($_POST['Submit']))
{
     
    
    $Sname=$_POST['D1'];
    $Scode=$_POST['D2'];
    $Ctype=$_POST['D3'];
    $Sem=$_POST['D4'];
    $Dept=$_POST['D5'];
    
    
//    echo $Apcode,$Aschdt,$Aautphno;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="update `subject` set `sname`='$Sname',`subject_id`='$Scode',`ctype`='$Ctype',`sem`='$Sem',`dept`='$Dept' where `subject_id`='$Scode'"; 

if(mysql_query($sql,$con))

{

// echo "Record Updated Successfully";
echo "<script>alert('Record Updated');</script>";
echo ("<script LANGUAGE='JavaScript'>window. location. href='SubjectView.php';</script>");
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