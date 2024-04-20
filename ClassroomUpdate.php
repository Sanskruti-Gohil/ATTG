<?php

if(isset ($_POST['Submit']))
{
     
    
    $Cname=$_POST['D1'];
    $Bname=$_POST['D2'];
    
    
//    echo $Apcode,$Aschdt,$Aautphno;  
$con=mysql_connect("localhost","root","");  
if($con)
{
    // echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("attg");
$sql="update `classroom` set `cname`='$Cname',`bname`='$Bname' where `cname`='$Cname'"; 

if(mysql_query($sql,$con))

{

// echo "Record Updated Successfully";
echo "<script>alert('Record Updated');</script>";
echo ("<script LANGUAGE='JavaScript'>window. location. href='ClassroomView.php';</script>");
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